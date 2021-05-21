<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210520194251 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, author_id INT NOT NULL, type_id INT NOT NULL, title VARCHAR(255) NOT NULL, content LONGTEXT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_23A0E66F675F31B (author_id), INDEX IDX_23A0E66C54C8C93 (type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE article_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grade (id INT AUTO_INCREMENT NOT NULL, subject_id INT NOT NULL, student_id INT NOT NULL, label VARCHAR(255) NOT NULL, date DATETIME NOT NULL, value DOUBLE PRECISION NOT NULL, INDEX IDX_595AAE3423EDC87 (subject_id), INDEX IDX_595AAE34CB944F1A (student_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, started_at DATETIME NOT NULL, ended_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_student (project_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_213DA356166D1F9C (project_id), INDEX IDX_213DA356CB944F1A (student_id), PRIMARY KEY(project_id, student_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_subject (project_id INT NOT NULL, subject_id INT NOT NULL, INDEX IDX_6DD0321F166D1F9C (project_id), INDEX IDX_6DD0321F23EDC87 (subject_id), PRIMARY KEY(project_id, subject_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, manager_id INT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, started_at DATETIME NOT NULL, ended_at DATETIME DEFAULT NULL, INDEX IDX_C11D7DD1783E3463 (manager_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, related_user_id INT NOT NULL, promotion_id INT NOT NULL, arrived_at DATETIME NOT NULL, graduated_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_B723AF3398771930 (related_user_id), INDEX IDX_B723AF33139DF194 (promotion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE student_type_student (student_type_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_6DC7171287A396B (student_type_id), INDEX IDX_6DC7171CB944F1A (student_id), PRIMARY KEY(student_type_id, student_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_teacher (subject_id INT NOT NULL, teacher_id INT NOT NULL, INDEX IDX_15740A7723EDC87 (subject_id), INDEX IDX_15740A7741807E1D (teacher_id), PRIMARY KEY(subject_id, teacher_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subject_student (subject_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_12A1039123EDC87 (subject_id), INDEX IDX_12A10391CB944F1A (student_id), PRIMARY KEY(subject_id, student_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teacher (id INT AUTO_INCREMENT NOT NULL, related_user_id INT NOT NULL, UNIQUE INDEX UNIQ_B0F6A6D598771930 (related_user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teacher_type (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(255) NOT NULL, label VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE teacher_type_teacher (teacher_type_id INT NOT NULL, teacher_id INT NOT NULL, INDEX IDX_E083D1288E01D2 (teacher_type_id), INDEX IDX_E083D1241807E1D (teacher_id), PRIMARY KEY(teacher_type_id, teacher_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66F675F31B FOREIGN KEY (author_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E66C54C8C93 FOREIGN KEY (type_id) REFERENCES article_type (id)');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE3423EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id)');
        $this->addSql('ALTER TABLE grade ADD CONSTRAINT FK_595AAE34CB944F1A FOREIGN KEY (student_id) REFERENCES student (id)');
        $this->addSql('ALTER TABLE project_student ADD CONSTRAINT FK_213DA356166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_student ADD CONSTRAINT FK_213DA356CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_subject ADD CONSTRAINT FK_6DD0321F166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_subject ADD CONSTRAINT FK_6DD0321F23EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE promotion ADD CONSTRAINT FK_C11D7DD1783E3463 FOREIGN KEY (manager_id) REFERENCES teacher (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF3398771930 FOREIGN KEY (related_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF33139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE student_type_student ADD CONSTRAINT FK_6DC7171287A396B FOREIGN KEY (student_type_id) REFERENCES student_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE student_type_student ADD CONSTRAINT FK_6DC7171CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_teacher ADD CONSTRAINT FK_15740A7723EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_teacher ADD CONSTRAINT FK_15740A7741807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_student ADD CONSTRAINT FK_12A1039123EDC87 FOREIGN KEY (subject_id) REFERENCES subject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE subject_student ADD CONSTRAINT FK_12A10391CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teacher ADD CONSTRAINT FK_B0F6A6D598771930 FOREIGN KEY (related_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE teacher_type_teacher ADD CONSTRAINT FK_E083D1288E01D2 FOREIGN KEY (teacher_type_id) REFERENCES teacher_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE teacher_type_teacher ADD CONSTRAINT FK_E083D1241807E1D FOREIGN KEY (teacher_id) REFERENCES teacher (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E66C54C8C93');
        $this->addSql('ALTER TABLE project_student DROP FOREIGN KEY FK_213DA356166D1F9C');
        $this->addSql('ALTER TABLE project_subject DROP FOREIGN KEY FK_6DD0321F166D1F9C');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF33139DF194');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE34CB944F1A');
        $this->addSql('ALTER TABLE project_student DROP FOREIGN KEY FK_213DA356CB944F1A');
        $this->addSql('ALTER TABLE student_type_student DROP FOREIGN KEY FK_6DC7171CB944F1A');
        $this->addSql('ALTER TABLE subject_student DROP FOREIGN KEY FK_12A10391CB944F1A');
        $this->addSql('ALTER TABLE student_type_student DROP FOREIGN KEY FK_6DC7171287A396B');
        $this->addSql('ALTER TABLE grade DROP FOREIGN KEY FK_595AAE3423EDC87');
        $this->addSql('ALTER TABLE project_subject DROP FOREIGN KEY FK_6DD0321F23EDC87');
        $this->addSql('ALTER TABLE subject_teacher DROP FOREIGN KEY FK_15740A7723EDC87');
        $this->addSql('ALTER TABLE subject_student DROP FOREIGN KEY FK_12A1039123EDC87');
        $this->addSql('ALTER TABLE promotion DROP FOREIGN KEY FK_C11D7DD1783E3463');
        $this->addSql('ALTER TABLE subject_teacher DROP FOREIGN KEY FK_15740A7741807E1D');
        $this->addSql('ALTER TABLE teacher_type_teacher DROP FOREIGN KEY FK_E083D1241807E1D');
        $this->addSql('ALTER TABLE teacher_type_teacher DROP FOREIGN KEY FK_E083D1288E01D2');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE article_type');
        $this->addSql('DROP TABLE grade');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_student');
        $this->addSql('DROP TABLE project_subject');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE student');
        $this->addSql('DROP TABLE student_type');
        $this->addSql('DROP TABLE student_type_student');
        $this->addSql('DROP TABLE subject');
        $this->addSql('DROP TABLE subject_teacher');
        $this->addSql('DROP TABLE subject_student');
        $this->addSql('DROP TABLE teacher');
        $this->addSql('DROP TABLE teacher_type');
        $this->addSql('DROP TABLE teacher_type_teacher');
    }
}
