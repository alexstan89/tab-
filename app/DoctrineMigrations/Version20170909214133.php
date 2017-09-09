<?php

namespace MaxU\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170909214133 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campaign_products ADD campaign_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE campaign_products ADD CONSTRAINT FK_81CA8C25F639F774 FOREIGN KEY (campaign_id) REFERENCES campaigns (id)');
        $this->addSql('CREATE INDEX IDX_81CA8C25F639F774 ON campaign_products (campaign_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE campaign_products DROP FOREIGN KEY FK_81CA8C25F639F774');
        $this->addSql('DROP INDEX IDX_81CA8C25F639F774 ON campaign_products');
        $this->addSql('ALTER TABLE campaign_products DROP campaign_id');
    }
}
