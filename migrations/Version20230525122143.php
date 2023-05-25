<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230525122143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649C3C6F69F');
        $this->addSql('DROP INDEX UNIQ_8D93D649E7927C74 ON user');
        $this->addSql('DROP INDEX IDX_8D93D649C3C6F69F ON user');
        $this->addSql('ALTER TABLE user DROP car_id, DROP email, DROP roles, DROP password, DROP first_name, DROP created, DROP last_name, DROP phone');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD car_id INT NOT NULL, ADD email VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD created DATE NOT NULL, ADD last_name VARCHAR(255) NOT NULL, ADD phone DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649C3C6F69F FOREIGN KEY (car_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON user (email)');
        $this->addSql('CREATE INDEX IDX_8D93D649C3C6F69F ON user (car_id)');
    }
}
