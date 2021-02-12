<?php
class Root
{
    public static $test = "";

    public static function executer($url)
    {
        // $page = htmlspecialchars(trim($page));
        $url = htmlspecialchars(trim($url));
        $app_url = "";

        $controlName = "";
        $methodName = "";
        $param = [];
        //tester s'il y a un '/'
        if (strpos($url, "/") > -1) {
            $app_url = explode("/", $url);
            $controlName = $app_url[0];
            $methodName = $app_url[1];
            if (count($app_url) == 2) {
                if (file_exists("Controls/" . $controlName . ".class.php")) {
                    if (method_exists($controlName, $methodName)) {
                        //execution de la methode
                        $reflect = new ReflectionMethod($controlName, $methodName);
                        $reflect->invoke(new $controlName);
                    } else {
                        echo "La methode n'existe pas";
                    }

                } else {
                    echo "La classe n'existe pas";
                }

            } else {
                $j = 0;
                for ($i = 2; $i < count($app_url); $i++) {
                    $param[$j] = $app_url[$i];
                    $j++;
                }
                if (file_exists("Controls/" . $controlName . ".class.php")) {
                    if (method_exists($controlName, $methodName)) {
                        //execution de la methode
                        $reflect = new ReflectionMethod($controlName, $methodName);
                        $reflect->invokeArgs(new $controlName, $param);
                    } else {
                        echo "La methode avec parametre n'existe pas";
                    }

                } else {
                    echo "La CLASSE n'existe pas";
                }
            }
        } else {
            $controlName = "loadpage";

            $methodName = "index";
            if (file_exists("Controls/" . $url . ".class.php")) {
                $reflect = new ReflectionMethod($url, $methodName);
                $reflect->invoke(new $url);
            } else {
              if (method_exists($controlName, $url)) {
                //execution de la methode
                $reflect = new ReflectionMethod($controlName, $url);
                $reflect->invoke(new $controlName);
            }  
            }

        }

        //     // verifier si la classe existe
        // if (file_exists("Controls/" . $controlName . ".class.php")) {
        //     if (method_exists($controlName, $methodName)) {
        //         if (count($param) == 0) {
        //             //execution de la methode
        //             $reflect = new ReflectionMethod($controlName, $methodName);
        //             $reflect->invoke(new $controlName);
        //         } else {
        //             $reflect = new ReflectionMethod($controlName, $methodName);
        //             $reflect->invokeArgs(new $controlName, $param);
        //         }
        //     }else if (!method_exists($controlName, $methodName) || $methodName = "") {
        //         $methodName = "index";
        //         $reflect = new ReflectionMethod($controlName, $methodName);
        //         $reflect->invoke(new $controlName);
        //     }
        // }else {
        //     $methodName = "index";
        //     $reflect = new ReflectionMethod($controlName, $methodName);
        //     $reflect->invoke(new $controlName);
        // }
    }
}
