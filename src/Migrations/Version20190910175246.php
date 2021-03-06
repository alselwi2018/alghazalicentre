<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190910175246 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE facility_booking (id INT AUTO_INCREMENT NOT NULL, organisation_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, contact_name VARCHAR(255) NOT NULL, contact_number VARCHAR(255) NOT NULL, reason VARCHAR(255) NOT NULL, number_of_people VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, time VARCHAR(255) NOT NULL, large_main_hall VARCHAR(255) NOT NULL, classroom VARCHAR(255) NOT NULL, projector_screen VARCHAR(255) NOT NULL, pa_system VARCHAR(255) NOT NULL, additional_services VARCHAR(255) NOT NULL, lunch_food VARCHAR(255) NOT NULL, sign_name VARCHAR(255) NOT NULL, signature VARCHAR(255) NOT NULL, sign_date VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE facility_booking');
    }
}
