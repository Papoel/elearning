<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210729193632 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, formateur_id INT NOT NULL, titre VARCHAR(100) NOT NULL, contenu LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_FDCA8C9C155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE procedures (id INT AUTO_INCREMENT NOT NULL, technique_id INT DEFAULT NULL, nom VARCHAR(20) NOT NULL, rdu VARCHAR(20) DEFAULT NULL, indice VARCHAR(2) NOT NULL, is_qualifie TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_969AFE421F8ACB26 (technique_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salarie (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, nni VARCHAR(8) DEFAULT NULL, email VARCHAR(255) NOT NULL, password LONGTEXT NOT NULL, roles VARCHAR(255) NOT NULL, agence VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, is_formateur TINYINT(1) NOT NULL, is_superviseur TINYINT(1) NOT NULL, is_admin TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technique (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE cours ADD CONSTRAINT FK_FDCA8C9C155D8F51 FOREIGN KEY (formateur_id) REFERENCES salarie (id)');
        $this->addSql('ALTER TABLE procedures ADD CONSTRAINT FK_969AFE421F8ACB26 FOREIGN KEY (technique_id) REFERENCES technique (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cours DROP FOREIGN KEY FK_FDCA8C9C155D8F51');
        $this->addSql('ALTER TABLE procedures DROP FOREIGN KEY FK_969AFE421F8ACB26');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE procedures');
        $this->addSql('DROP TABLE salarie');
        $this->addSql('DROP TABLE technique');
    }
}
