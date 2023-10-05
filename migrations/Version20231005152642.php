<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231005152642 extends AbstractMigration
{
    public function up(Schema $schema): void
    {

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE module_route (
            id INT AUTO_INCREMENT NOT NULL,
            route_type VARCHAR(255) NOT NULL,
            host VARCHAR(255) NOT NULL,
            PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB'
        );

        $this->addSql("INSERT INTO module_route (route_type, host) VALUES ('module_one', 'domain1.test.com')");
        $this->addSql("INSERT INTO module_route (route_type, host) VALUES ('module_two', 'domain2.test.com')");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE module_route');
    }
}
