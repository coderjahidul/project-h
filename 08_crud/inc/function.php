<?php
// define database
define('DB_NAME', dirname(__DIR__) . "/data/db.txt");

// seed data into database file from array 
function seed (){
    $data = array(
        array(
            'id' => 1,
            'roll' => 11,
            'fname' => 'Jahid',
            'lname' => 'Islam',
            'class' => '10',
            'age' => 22
        ),
        array(
            'id' => 2,
            'roll' => 12,
            'fname' => 'Mojahidul',
            'lname' => 'Islam',
            'class' => '10',
            'age' => 23
        ),
        array(
            'id' => 3,
            'roll' => 13,
            'fname' => 'Shajalal',
            'lname' => 'Islam',
            'class' => '10',
            'age' => 24
        ),
        array(
            'id' => 4,
            'roll' => 14,
            'fname' => 'Salma',
            'lname' => 'Islam',
            'class' => '10',
            'age' => 25
        ),
        array( 
            'id' => 5,
            'roll' => 15,
            'fname' => 'Siful',
            'lname' => 'Islam',
            'class' => '10',
            'age' => 26
        )
    );
    // serialize data
    $serializeData = serialize($data);

    // write into file
    file_put_contents(DB_NAME, $serializeData, LOCK_EX);
}

// generateReport function
function generateReport(){
    // read from file
    $data = file_get_contents(DB_NAME);
    // unserialize data
    $students = unserialize($data);
    ?>
    <table>
        <tr>
            <th>Roll</th>
            <th>Full Name</th>
            <th>Class</th>
            <th>Age</th>
            <th>Action</th>
        </tr>
        <?php foreach($students as $student){ 
            $student_id = $student['id'];
            $student_roll = $student['roll'];
            $student_fname = $student['fname'];
            $student_lname = $student['lname'];
            $student_class = $student['class'];
            $student_age = $student['age'];
            $basUrl = 'http://localhost/project-h/08_crud/index.php';
            ?>
            <tr>
                <td><?php echo $student_roll; ?></td>
                <td><?php echo $student_fname . ' ' . $student_lname; ?></td>
                <td><?php echo $student_class; ?></td>
                <td><?php echo $student_age; ?></td>
                <td><a href="<?php echo $basUrl . '?task=edit&id=' . $student_id; ?>">Edit</a>|<a href="<?php echo $basUrl . '?task=delete&id=' . $student_id; ?>">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
    <?php
}

// addStudent function
function addStudent($fname, $lname, $class, $roll, $age){
    $found = false;
    $data = file_get_contents(DB_NAME);
    $students = unserialize($data);
    foreach($students as $student){
        if($student['roll'] == $roll){
            $found = true;
            break;
        }
    }
    if(!$found){
        $new_student_id = count($students) + 1;
        $student = array(
            'id' => $new_student_id,
            'roll' => $roll,
            'fname' => $fname,
            'lname' => $lname,
            'class' => $class,
            'age' => $age
        );
        array_push($students, $student);
        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData, LOCK_EX); 
        return true;
    }
    return false;
}

// getStudent function
function getStudent($id){
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    foreach($students as $student){
        $student_id = $student['id'];
        if($student_id == $id){
            return $student;
        }
    }
    return false;
}


// updateStudent function
function updateStudent($id, $fname, $lname, $class, $roll, $age){
    $found = false;
    $serializeData = file_get_contents(DB_NAME);
    $students = unserialize($serializeData);
    foreach($students as $student){
        if($student['roll'] == $roll && $student['id'] != $id){
            $found = true;
            break;
        }
    }

    if(!$found){
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['class'] = $class;
        $students[$id-1]['roll'] = $roll;
        $students[$id-1]['age'] = $age;
        $serializeData = serialize($students);
        file_put_contents(DB_NAME, $serializeData, LOCK_EX);
        return true;
    }
    return false;
}
