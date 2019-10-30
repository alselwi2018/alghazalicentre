<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191013153254 extends AbstractMigration
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
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT NULL, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT NULL, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE karate CHANGE ethnicity ethnicity JSON DEFAULT NULL COMMENT \'(DC2Type:json_array)\'');
        $this->addSql('ALTER TABLE supplementary ADD mother_status VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE complain CHANGE mobile_number mobile_number INT DEFAULT NULL');
        $this->addSql('ALTER TABLE craue_config_setting CHANGE section section VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE value value VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE jobs CHANGE second_reference_name second_reference_name VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_address second_reference_address VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE second_reference_relation second_reference_relation VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE karate CHANGE ethnicity ethnicity JSON DEFAULT \'NULL\' COLLATE utf8mb4_bin COMMENT \'(DC2Type:json_array)\'');
        $this->addSql('ALTER TABLE supplementary DROP mother_status');
    }
}
