<?php
/*
328/diner/controllers/controller.php
*/

class Controller
{
    private $_f3;

    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    function admin()
    {
        //Get the orders from the DB and save them to the F3 hive
        $orders = $GLOBALS['dataLayer']->viewOrders();
        var_dump($orders);
        $this->_f3->set('orders', $orders);

        $view = new Template();
        echo $view->render('views/admin.html');
    }

    function order()
    {
        //echo "Order page";

        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Move orderForm1 data from POST to SESSION
            var_dump ($_POST);

            //Get the user data from the post array
            $sid = $_POST['sid'];
            $this->_f3->set('userSid', $sid);


            $last = $_POST['last'];
            $this->_f3->set('userLast', $last);

            $first= $_POST['first'];
            $this->_f3->set('userFirst', $first);


            $birthdate = $_POST['birthdate'];
            $this->_f3->set('userBirth', $birthdate);

            $gpa = $_POST['gpa'];
            $this->_f3->set('userGpa', $gpa);

            $advisor = $_POST['advisor'];
            $this->_f3->set('userAdvisor', $advisor);




            //Create a new Order object
            $order = new Order();

            //Add the food to the order
            $order->setSid($sid);

            //Store the order in the session array
            $_SESSION['order'] = $order;
            $_SESSION['order']->setLast($last);
            $_SESSION['order']->setFirst($first);
            $_SESSION['order']->setBirthdate($birthdate);
            $_SESSION['order']->setGpa($gpa);
            $_SESSION['order']->setAdvisor($advisor);


            //Store it in the session array
       //     $_SESSION['order']->setMeal($meal);



            header('location: student');

        }

        //Add meal data to hive
       // $this->_f3->set('meals', DataLayer::getMeals());

        //Display order form 1
        $view = new Template();
        echo $view->render('views/order.html');
    }

    function student()
    {
        //Write to database
     /*  $orderId = $GLOBALS['dataLayer']->saveOrder($_SESSION['order']);
        $this->_f3->set('orderId', $orderId);*/

        $view = new Template();
        echo $view->render('views/student.html');

        session_destroy();
    }


} // end of Controller class


