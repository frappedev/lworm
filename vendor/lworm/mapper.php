<?php

namespace lworm;

class Mapper {

    public static $HOST, $USER, $PASS, $DB;

    private $table, $conn, $as_array, $index = 0;
    public $properties;

    public function __construct($data, $is_json=false) {
        /**
        *   Constructor creates an object of the class mapper by accepting either table name or json file name.
        *   @params $data string
        *   @params $is_json bool
        *   @return instance
        **/
        if($is_json) {
            if(file_exists($data))
                $this->as_array = json_decode(file_get_contents($data),true);
            else
                echo "No file found";
        } else {
            $this->table = $data;
            $this->conn = new \mysqli(self::$HOST,self::$USER,self::$PASS,self::$DB);
            $rst = $this->conn->query("DESC $data");
            while($row = $rst->fetch_assoc()) {
                $this->$row['Field'] = '';
                $this->properties[] = $row['Field'];
            }
        }
    }

    public function __get($key) {
        return isset($this->$key) ? $this->$key : "";
    }

    public function load($cond = null) {

        $rst= $this->conn->query("SELECT * FROM $this->table LIMIT $this->index, 1");

        if($rst->num_rows == 0)
            return false;
        while($row = $rst->fetch_assoc()) {
            foreach($row as $key => $value) {
                $this->$key = $value;
                $this->as_array[$key] = $value;
            }
        }

        return true;
    }

    public function next($val = null) {
        if(isset($val))
            $this->index += $val;
        else
            $this->index++;
        return $this->load();
    }

    public function prev() {
        $this->index ? $this->index-- : 0;
        return $this->load();
    }

    public function cast() {
        return $this->as_array;
    }

	public function __toString() {
        return json_encode($this->as_array);
    }
}
