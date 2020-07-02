<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200702132528 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE project (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(200) NOT NULL, description LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE project_student (project_id INT NOT NULL, student_id INT NOT NULL, INDEX IDX_213DA356166D1F9C (project_id), INDEX IDX_213DA356CB944F1A (student_id), PRIMARY KEY(project_id, student_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE project_student ADD CONSTRAINT FK_213DA356166D1F9C FOREIGN KEY (project_id) REFERENCES project (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE project_student ADD CONSTRAINT FK_213DA356CB944F1A FOREIGN KEY (student_id) REFERENCES student (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE school_year DROP description, CHANGE name name VARCHAR(200) NOT NULL');
        $this->addSql('ALTER TABLE student DROP birthyear, CHANGE firstname firstname VARCHAR(200) NOT NULL, CHANGE lastname lastname VARCHAR(200) NOT NULL');
        $this->addSql('ALTER TABLE tag ADD description LONGTEXT DEFAULT NULL, CHANGE name name VARCHAR(200) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE project_student DROP FOREIGN KEY FK_213DA356166D1F9C');
        $this->addSql('DROP TABLE project');
        $this->addSql('DROP TABLE project_student');
        $this->addSql('ALTER TABLE school_year ADD description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE name name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE student ADD birthyear INT DEFAULT NULL, CHANGE firstname firstname VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE lastname lastname VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE tag DROP description, CHANGE name name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
