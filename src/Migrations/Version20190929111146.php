<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190929111146 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE craue_config_setting CHANGE section section VARCHAR(255) DEFAULT NULL, CHANGE value value VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE complain CHANGE mobile_number mobile_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT NULL, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT NULL, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT NULL, CHANGE employment_two_from employment_two_from VARCHAR(255) NOT NULL, CHANGE employment_two_to employment_two_to VARCHAR(255) NOT NULL, CHANGE employer_two_name_and_contact employer_two_name_and_contact VARCHAR(255) NOT NULL, CHANGE position_two_held position_two_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_two reason_for_leaving_two VARCHAR(255) NOT NULL, CHANGE employment_three_from employment_three_from VARCHAR(255) NOT NULL, CHANGE employment_three_to employment_three_to VARCHAR(255) NOT NULL, CHANGE position_three_held position_three_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_three reason_for_leaving_three VARCHAR(255) NOT NULL, CHANGE employment_four_from employment_four_from VARCHAR(255) NOT NULL, CHANGE employment_four_to employment_four_to VARCHAR(255) NOT NULL, CHANGE employment_four_name_and_contact employment_four_name_and_contact VARCHAR(255) NOT NULL, CHANGE position_four_held position_four_held VARCHAR(255) NOT NULL, CHANGE reason_for_leaving_four reason_for_leaving_four VARCHAR(255) NOT NULL, CHANGE employer_three_name_and_contact employer_three_name_and_contact VARCHAR(255) NOT NULL, CHANGE employer_four_name_and_contact employer_four_name_and_contact VARCHAR(255) NOT NULL, CHANGE qualification_two_name qualification_two_name VARCHAR(255) NOT NULL, CHANGE obtained_two_from obtained_two_from VARCHAR(255) NOT NULL, CHANGE qualification_two_date qualification_two_date VARCHAR(255) NOT NULL, CHANGE qualification_three_name qualification_three_name VARCHAR(255) NOT NULL, CHANGE obtained_three_from obtained_three_from VARCHAR(255) NOT NULL, CHANGE qualification_three_date qualification_three_date VARCHAR(255) NOT NULL, CHANGE qualification_four_name qualification_four_name VARCHAR(255) NOT NULL, CHANGE obtained_four_from obtained_four_from VARCHAR(255) NOT NULL, CHANGE qualification_four_date qualification_four_date VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE karate ADD ref VARCHAR(255) NOT NULL, ADD date_created DATETIME NOT NULL, CHANGE first_name first_name VARCHAR(255) NOT NULL, CHANGE last_name last_name VARCHAR(255) NOT NULL, CHANGE date_of_birth date_of_birth VARCHAR(255) NOT NULL, CHANGE gender gender VARCHAR(255) NOT NULL, CHANGE ethnicity ethnicity JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\', CHANGE home_address home_address VARCHAR(255) NOT NULL, CHANGE post_code post_code VARCHAR(255) NOT NULL, CHANGE contact_number contact_number VARCHAR(255) NOT NULL, CHANGE full_name_of_mother_guardian full_name_of_mother_guardian VARCHAR(255) NOT NULL, CHANGE emergency_contact_name emergency_contact_name VARCHAR(255) NOT NULL, CHANGE relationship_to_child relationship_to_child VARCHAR(255) NOT NULL, CHANGE contact_number_reference contact_number_reference VARCHAR(255) NOT NULL, CHANGE medication medication VARCHAR(255) NOT NULL, CHANGE yes_medication yes_medication VARCHAR(255) NOT NULL, CHANGE declaration_one declaration_one VARCHAR(255) NOT NULL, CHANGE consent consent VARCHAR(255) NOT NULL, CHANGE declare_name declare_name VARCHAR(255) NOT NULL, CHANGE declare_date declare_date VARCHAR(255) NOT NULL, CHANGE permission permission VARCHAR(255) NOT NULL, CHANGE permit_name permit_name VARCHAR(255) NOT NULL, CHANGE permit_date permit_date VARCHAR(255) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E7927C74 ON users (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE complain CHANGE mobile_number mobile_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE craue_config_setting CHANGE section section VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE value value VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_two_from employment_two_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_two_to employment_two_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_two_name_and_contact employer_two_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_two_held position_two_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_two reason_for_leaving_two VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_three_from employment_three_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_three_to employment_three_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_three_held position_three_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_three reason_for_leaving_three VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_from employment_four_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_to employment_four_to VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employment_four_name_and_contact employment_four_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE position_four_held position_four_held VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE reason_for_leaving_four reason_for_leaving_four VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_three_name_and_contact employer_three_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE employer_four_name_and_contact employer_four_name_and_contact VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_two_name qualification_two_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_two_from obtained_two_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_two_date qualification_two_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_three_name qualification_three_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_three_from obtained_three_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_three_date qualification_three_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_four_name qualification_four_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE obtained_four_from obtained_four_from VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE qualification_four_date qualification_four_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE karate DROP ref, DROP date_created, CHANGE first_name first_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE last_name last_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE date_of_birth date_of_birth VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE gender gender VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE ethnicity ethnicity VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE home_address home_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE post_code post_code VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE contact_number contact_number VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE full_name_of_mother_guardian full_name_of_mother_guardian VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE emergency_contact_name emergency_contact_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE relationship_to_child relationship_to_child VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE contact_number_reference contact_number_reference VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE medication medication VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE yes_medication yes_medication VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE declaration_one declaration_one VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE consent consent VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE declare_name declare_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE declare_date declare_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE permission permission VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE permit_name permit_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE permit_date permit_date VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E7927C74 ON users');
    }
}
