<?php
function admin($name, $email, $phone, $topic, $description, $id){
    $element="
    
            <div class=\"container center\" >
                <p class=\"Name\"><b>Name</b></p>
                <p name=\"name\">$name</p><br>
                <p class=\"Email\"><b>Email</b></p> 
                <p name=\"email\" >$email</p><br>
                <p class=\"Phone\"><b>Phone</b></p>
                <p name=\"phone\">$phone</p><br>
                <p class=\"Topic\"><b>Topic</b></p>
                <p name=\"topic\">$topic</p><br>
				
                <p class=\"Description\" ><b>Description</b></p>
                <textarea readonly rows=\"4\" cols=\"34\" class=\"dash_text\" name=\"description\">$description</textarea><br><br>
                <input type=\"hidden\" name=\"id\" value=\"$id\">
                <button><a href=\"php/admin/respond.php?respondid=$id\">Respond</a></button><br><br>
                <button><a href=\"php/admin/delete.php?deleteid=$id\">Delete</a></button>
            </div>
    
	
    ";

    echo $element;
}

function resolved($name, $email, $phone, $topic, $description, $id){
    $element="
    
            <div class=\"container center\" >
                <p class=\"Name\"><b>Name</b></p>
                <p name=\"name\">$name</p><br>
                <p class=\"Email\"><b>Email</b></p> 
                <p name=\"email\">$email</p><br>
                <p class=\"Phone\"><b>Phone</b></p>
                <p name=\"phone\">$phone</p><br>
                <p class=\"Topic\"><b>Topic</b></p>
                <p name=\"topic\">$topic</p><br>
				
                <p class=\"Description\" ><b>Description</b></p>
                <textarea readonly rows=\"4\" cols=\"34\" class=\"dash_text\" name=\"description\">$description</textarea><br><br>
                <input type=\"hidden\" name=\"id\" value=\"$id\">
                
                <button><a href=\"update.php?updateid=$id\">Update</a></button><br><br>
                <button><a href=\"delete.php?deleteid=$id\">Delete</a></button>
            </div>
    
	
    ";

    echo $element;
}


function constructor($id, $name, $number, $description){
    $element="
    
        <div class=\"container center\" >
                <input type=\"hidden\" name=\"id\" value=\"$id\">
                <h2 style=\"font-size: 15px;\">$name</h2><br>
				<div class=\"flex\">
                <label>Available</label>
				<p id=\"available\" name=\"available\"><b>$number</b></p>
                </div><br><br>
				<label>Description</label><br><br>
                <textarea rows=\"4\" cols=\"34\">$description</textarea><br><br>
    
                <button><a href=\"php/constructor/update.php?updateid=$id\">Update</a></button><br><br>
                <button><a href=\"php/constructor/delete.php?deleteid=$id\">Delete</a></button>
            </div>
    ";
    echo $element;
}

function manager($id, $name, $deadline, $cname, $description){
    $element="
        
            <div class=\"container center\">
                <input 
                    type=\"hidden\" 
                    name=\"id\" 
                    value=\"$id\"/>

                <label>Project name</label>
                <p><b>
                $name
                </b></p>
                <br><br>
                <label>Deadline</label>
                <p><b>
                $deadline
                </b> </p>
                <br><br>
                <label>Client name</label>
                <p><b>
                $cname
                </b></p>
                <br><br>

                <label>Description</label>
                <br><br>
                <textarea rows=\"4\" cols=\"34\">
                $description
                </textarea><br><br>

                <button type=\"submit\">
                <a href=\"php/manager/update.php?updateid=$id\">
                Update
                </a></button><br><br>

                <button>
                <a href=\"php/manager/delete.php?deleteid=$id\">
                Delete
                </a></button>
            </div>
    
        
    ";
    echo $element;
}
function appointment($id, $cname, $project, $topic, $date, $time){
    $element="
        <div class=\"container center\">
            <input 
                type=\"hidden\" 
                name=\"id\" 
                value=\"$id\"/>
            
            <label>client name</label>
            <p><b>
            $cname
            </b></p>
            <br><br>
            
            <label>project Name</label>
            <p><b>
            $project
            </b></p>
            <br><br>
            
            <label>Topic</label>
            <p><b>
            $topic
            </b></p>
            <br><br>

            <label>Date</label>
            <br><br>
            <p><b>
            $date
            </b></p>
            <br><br>
            
            <label>Time</label>
            <br><br>
            <p><b>
            $time
            </b></p>
            <br><br>
    
            <button type=\"submit\">
            <a href=\"php/manager/appointment/update.php?updateid=$id\">
            Update</a></button>
            <br><br>
            <button><a href=\"php/manager/appointment/delete.php?deleteid=$id\">
            Delete
            </a></button>
        </div>
        ";

        echo $element;

}

function client($id, $cname, $project, $topic, $time, $date, $user_id){

    $element="
        <div class=\"container center\">
             <input type=\"hidden\" name=\"id\" value=\"$id\">
             
             <input type=\"hidden\" name=\"id\" value=\"$cname\">
             
            <label>Project name</label>
            
            <p><b>$project</b></p><br><br>
            
            <label>Topic for discussion</label>
            
            <p><b>$topic</b></p><br><br>
            
            <label>Time</label>
            
            <p><b>$time</b></p><br><br>

            <label>Date</label><br><br>
            
            <p><b>$date</b></p><br><br>

            <input type=\"hidden\" name=\"id\" value=\"$user_id\">
            
            <button type=\"submit\"><a href=\"php/client/Update.php?updateid=$id\">Update</a></button><br><br>
            <button><a href=\"php/client/delete.php?deleteid=$id\">delete</a></button>
        </div>

        
    
    ";
    echo $element;
 
}
  
?>