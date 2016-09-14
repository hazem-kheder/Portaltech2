# Portaltech

  - Download this project or clone it via Git
  - Open your terminal and navigate to your website directory
  - Run this command : php composer.phar install
  - Create new database and import the sql to it from the database directory
  - Open lib/AbstractItems and change your database infos
  
You are done :)

Code thief Hazem
------------------------------
- Code stolen from others (every web site in the planet)
- $this->pdo = new \PDO(self::DSN, self::USERNAME, self::PASSWORD);
- $this->pdo->setAttribute(\PDO::ATTR_ERRMODE , \PDO::ERRMODE_EXCEPTION);
- $sql = $db->prepare("SELECT * FROM list LIMIT 0,20");
- $sql->execute();
- $ListArray = $sql->fetchAll(\PDO::FETCH_ASSOC);




