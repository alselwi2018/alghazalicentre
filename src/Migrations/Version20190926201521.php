<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190926201521 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE complain CHANGE mobile_number mobile_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT NULL, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT NULL, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT NULL, CHANGE employment_two_from employment_two_from VARCHAR(255) NOT NULL, CHANGE employment_two_to employment_two_to VARCHAR(255) NOT NULL, CHANGE employer_two_name_and_contact employer_two_name_and_contact VARCHAR(255) NOT NULL, CHANGE position_two_held position_two_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_two reason_for_leaving_two VARCHAR(255) NOT NULL, CHANGE employment_three_from employment_three_from VARCHAR(255) NOT NULL, CHANGE employment_three_to employment_three_to VARCHAR(255) NOT NULL, CHANGE position_three_held position_three_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_three reason_for_leaving_three VARCHAR(255) NOT NULL, CHANGE employment_four_from employment_four_from VARCHAR(255) NOT NULL, CHANGE employment_four_to employment_four_to VARCHAR(255) NOT NULL, CHANGE employment_four_name_and_contact employment_four_name_and_contact VARCHAR(255) NOT NULL, CHANGE position_four_held position_four_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_four reason_for_leaving_four VARCHAR(255) NOT NULL, CHANGE employer_three_name_and_contact employer_three_name_and_contact VARCHAR(255) NOT NULL, CHANGE employer_four_name_and_contact employer_four_name_and_contact VARCHAR(255) NOT NULL, CHANGE qualification_two_name qualification_two_name VARCHAR(255) NOT NULL, CHANGE obtained_two_from obtained_two_from VARCHAR(255) NOT NULL, CHANGE qualification_two_date qualification_two_date VARCHAR(255) NOT NULL, CHANGE qualification_three_name qualification_three_name VARCHAR(255) NOT NULL, CHANGE obtained_three_from obtained_three_from VARCHAR(255) NOT NULL, CHANGE qualification_three_date qualification_three_date VARCHAR(255) NOT NULL, CHANGE qualification_four_name qualification_four_name VARCHAR(255) NOT NULL, CHANGE obtained_four_from obtained_four_from VARCHAR(255) NOT NULL, CHANGE qualification_four_date qualification_four_date VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE complain CHANGE mobile_number mobile_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_two_from employment_two_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_two_to employment_two_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_two_name_and_contact employer_two_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_two_held position_two_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_two reason_for_leaving_two VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_three_from employment_three_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_three_to employment_three_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_three_held position_three_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_three reason_for_leaving_three VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_from employment_four_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_to employment_four_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_name_and_contact employment_four_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_four_held position_four_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_four reason_for_leaving_four VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_three_name_and_contact employer_three_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_four_name_and_contact employer_four_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_two_name qualification_two_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_two_from obtained_two_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_two_date qualification_two_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_three_name qualification_three_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_three_from obtained_three_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_three_date qualification_three_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_four_name qualification_four_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_four_from obtained_four_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_four_date qualification_four_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
    }
}
