<?php 


class Database{
    private $conn;
    public function connect(){
        $this->conn=null;
        try{
           //todo understand PDO
           //todo put db vars in env 
            $dsn = 'mysql:host=aws.connect.psdb.cloud;dbname=first;port=3306';
            $user = "p1i93p0uu9uu47ji6mb7";
            $dbP = "pscale_pw_yoj7CIKRe1WOEEuhx8EhygqsNuXxlTvVX6VIiuB4YTF";
            $options = array(
                PDO::MYSQL_ATTR_SSL_CA => '/etc/ssl/cert.pem'
            );
            $this->conn = new PDO($dsn,$user,$dbP,$options);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo 'Connected Successfully';
        }catch(PDOException $e){
            //todo json error
            echo $e->getMessage() . '<br> Connection Error';
        }   
        return $this->conn;
    }
}

?>