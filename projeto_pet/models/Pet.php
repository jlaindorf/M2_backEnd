<?php
class Pet
{
    private $id;
    private $name;
    private $race_id;
    private $age;
    private $weight;
    private $size;
    private $created_at;

    private $connection;

    public function __construct($name = null, $race_id = null)
    {
        $this->name = $name;
        $this->race_id = $race_id;
        $this->connection = new PDO("pgsql:host=localhost;dbname=api_pets", "docker", "docker");
    }

    public function insert()
    {
        try {
            $sql = "insert into pets 
            (
                name,
                race_id,
                age,
                size,
                weight
            )
            values
            (
                :name_value, 
                :race_id_value,
                :age_value,
                :size_value,
                :weight_value
            )
            ";

            $statement = ($this->getConnection())->prepare($sql);

            $statement->bindValue(":name_value", $this->getName());
            $statement->bindValue(":race_id_value", $this->getRaceId());
            $statement->bindValue(":age_value", $this->getAge());
            $statement->bindValue(":size_value", $this->getSize());
            $statement->bindValue(":weight_value", $this->getWeight());

            $statement->execute();

            return ['success' => true];
        } catch (PDOException $error) {
            debug($error->getMessage());
            return ['success' => false];
        }
    }


    public function findMany(){
        $sql = "select
                    pets.id,
                    pets.name,
                    size,
                    races.name as nome_raca
                        from pets
                            join races on pets.race_id = races.id
                            order by size DESC         
        ";
      /*  $sql = "select
        pets.id,
        pets.name,
        size,
        races.name as nome_raca
            from pets
                join races on pets.race_id = races.id
                order by size DESC         
";*/

        $statement = ($this->getConnection())->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findOne($id){
        $sql = "SELECT * from pets where id = :id_value";

        $statement = ($this->getConnection())->prepare($sql);
        $statement->bindValue(":id_value", $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function deleteOne($id){
        try {
            $sql = "delete from pets where id = :id_value";
    
            $statement = ($this->getConnection())->prepare($sql);
            $statement->bindValue(":id_value", $id);
            $statement->execute();
    
            return ['success' => true];
    
            } catch (PDOException $error) {
                debug($error->getMessage());
                return ['success' => false];
            }
        }
    
    function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }


    public function setRaceId($race_id)
    {
        $this->race_id = $race_id;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }


    public function getWeight()
    {
        return $this->weight;
    }


    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


    public function getSize()
    {
        return $this->size;
    }


    public function setSize($size)
    {
        $this->size = $size;
    }


    public function getCreatedAt()
    {
        return $this->created_at;
    }


    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function getRaceId()
    {
        return $this->race_id;
    }
}