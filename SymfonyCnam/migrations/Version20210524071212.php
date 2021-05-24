<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210524071212 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student_type_student DROP FOREIGN KEY FK_6DC7171287A396B');
        $this->addSql('ALTER TABLE teacher_type_teacher DROP FOREIGN KEY FK_E083D1288E01D2');
        $this->addSql('DROP TABLE student_type');
        $this->addSql('DROP TABLE student_type_student');
        $this->addSql('DROP TABLE teacher_type');
        $this->addSql('DROP TABLE teacher_type_teacher');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE student_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, label VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE student_type_student (student_type_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_6DC7171287A396B (student_type_id), INDEX IDX_6DC7171CB944F1A (student_id), PRIMARY KEY(student_type_id, student_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE teacher_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, label VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE teacher_type_teacher (teacher_type_id INT NOT NULL, teacher_id INT NOT NULL, INDEX IDX_E083D1241807E1D (teacher_id), INDEX IDX_E083D1288E01D2 (teacher_type_id), PRIMARY KEY(teacher_type_id, teacher_id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE student_type_student ADD CONSTRAINT FK_6DC7171287A396B FOREIGN KEY (student_type_id) REFERENCES student_type (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_type_student ADD CONSTRAINT FK_6DC7171CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teacher_type_teacher ADD CONSTRAINT FK_E083D1241807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teacher_type_teacher ADD CONSTRAINT FK_E083D1288E01D2 FOREIGN KEY (teacher_type_id) REFERENCES teacher_type (id) ON UPDATE NO ACTION ON DELETE CASCADE');
    }
}
