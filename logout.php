<!-- 
#############################################################################################################################                                  

88b           d88  88888888ba                88b           d88  888888888888  I8,        8        ,8I    ,ad8888ba,       88  
888b         d888  88      "8b               888b         d888       88       `8b       d8b       d8'   d8"'    `"8b      ""  
88`8b       d8'88  88      ,8P               88`8b       d8'88       88        "8,     ,8"8,     ,8"   d8'        `8b         
88 `8b     d8' 88  88aaaaaa8P'               88 `8b     d8' 88       88         Y8     8P Y8     8P    88          88     88  
88  `8b   d8'  88  88""""88'                 88  `8b   d8'  88       88         `8b   d8' `8b   d8'    88          88     88  
88   `8b d8'   88  88    `8b                 88   `8b d8'   88       88          `8a a8'   `8a a8'     Y8,        ,8P     88  
88    `888'    88  88     `8b       888      88    `888'    88       88           `8a8'     `8a8'       Y8a.    .a8P      88  
88     `8'     88  88      `8b      888      88     `8'     88       88            `8'       `8'         `"Y8888Y"'       88  
                                                                                                                         ,88  
                                                                                                                       888P"  
##############################################################################################################################
 #   twitter.com/MrMtwoj
 #   linkedin.com/in/joshani
 #   youtube.com/channel/UCWFLKi_xJDjg2kWQNYEXRhQ
 #   github.com/mrmtwoj
###############################################################################################################################
 -->
<?php
session_start();

if(isset($_SESSION['usr_id'])) {
	session_destroy();
	unset($_SESSION['usr_id']);
	unset($_SESSION['usr_name']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>