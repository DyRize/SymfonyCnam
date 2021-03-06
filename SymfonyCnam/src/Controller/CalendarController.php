<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/calendar")
 */
class CalendarController extends AbstractController
{
    /**
     * @Route("/", name="calendar_index", methods={"GET"})
     */
    public function index(CalendarRepository $calendarRepository): Response
    {
        $events = $calendarRepository->findAll();

        $rdvs = [];
        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'title' => $event->getTitle(),
                'start' => $event->getStart()->format('Y-m-d H:i:s'),
                'end' => $event->getEnd() === null ? $event->getStart()->format('Y-m-d 23:59:59') : $event->getEnd()->format('Y-m-d H:i:s') ,
                'description' => $event->getDescription(),
                'allDay' => $event->getAllDay(),
                'backgroundColor' => $event->getBackgroundColor(),
                'borderColor' => $event->getBorderColor(),
                'textColor' => $event->getTextColor(),
            ];
        }
        $data = json_encode($rdvs);
        return $this->render('calendar/calendar.html.twig', [
            'data' => $data
        ]);
    }

    /**
     * @Route("/new", name="calendar_new", methods={"GET","POST"})
     * @Security("is_granted('ROLE_SPEAKER') or is_granted('ROLE_DELEGATE')")
     */
    public function new(Request $request): Response
    {
        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendar);
            $entityManager->flush();

            return $this->redirectToRoute('calendar_index');
        }

        return $this->render('calendar/new.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_show", methods={"GET"})
     */
    public function show(Calendar $calendar): Response
    {
        return $this->render('calendar/show.html.twig', [
            'calendar' => $calendar,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendar_edit", methods={"GET","POST"})
     * @Security("is_granted('ROLE_SPEAKER') or is_granted('ROLE_DELEGATE')")
     */
    public function edit(Request $request, Calendar $calendar): Response
    {
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('calendar_index');
        }

        return $this->render('calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_delete", methods={"POST"})
     * @Security("is_granted('ROLE_SPEAKER') or is_granted('ROLE_DELEGATE')")
     */
    public function delete(Request $request, Calendar $calendar): Response
    {
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendar_index');
    }

    /**
     * @Route("/event/{id}/edit", name="calendar_edit_event", methods={"PUT"})
     * @throws Exception
     */
    public function updateEvent(?Calendar $calendar, Request $request): Response
    {
        $data = json_decode($request->getContent());
        if(
            isset($data->title) && !empty($data->title) &&
            isset($data->start) && !empty($data->start) &&
            isset($data->description) && !empty($data->description) &&
            isset($data->backgroundColor) && !empty($data->backgroundColor) &&
            isset($data->borderColor) && !empty($data->borderColor) &&
            isset($data->textColor) && !empty($data->textColor)
        ){
            $code = 200;
            if(!$calendar){
                $calendar = new Calendar();
                $code = 201;
            }

            $calendar->setTitle($data->title);
            $calendar->setStart(new \DateTime($data->start));
            $calendar->setEnd(new \DateTime($data->end));
            $calendar->setAllDay($data->allDay);
            $calendar->setDescription($data->description);
            $calendar->setBackgroundColor($data->backgroundColor);
            $calendar->setBorderColor($data->borderColor);
            $calendar->setTextColor($data->textColor);

            $em = $this->getDoctrine()->getManager();
            $em->persist($calendar);
            $em->flush();

            return new Response("OK", $code);
        }else{
            return new Response("Donn??es incompl??tes", 404);
        }
    }
}
