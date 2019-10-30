<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190916191938 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jobs ADD employer_two_name_and_contact VARCHAR(255) NOT NULL, ADD position_two_held VARCHAR(255) NOT NULL, ADD reason_for_leaving_two VARCHAR(255) NOT NULL, ADD employment_three_from VARCHAR(255) NOT NULL, ADD employment_three_to VARCHAR(255) NOT NULL, ADD position_three_held VARCHAR(255) NOT NULL, ADD reason_for_leaving_three VARCHAR(255) NOT NULL, ADD employment_four_from VARCHAR(255) NOT NULL, ADD employment_four_to VARCHAR(255) NOT NULL, ADD employment_four_name_and_contact VARCHAR(255) NOT NULL, ADD position_four_held VARCHAR(255) NOT NULL, ADD reason_for_leaving_four VARCHAR(255) NOT NULL, CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT NULL, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT NULL, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jobs DROP employer_two_name_and_contact, DROP position_two_held, DROP reason_for_leaving_two, DROP employment_three_from, DROP employment_three_to, DROP position_three_held, DROP reason_for_leaving_three, DROP employment_four_from, DROP employment_four_to, DROP employment_four_name_and_contact, DROP position_four_held, DROP reason_for_leaving_four, CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
    }
}
