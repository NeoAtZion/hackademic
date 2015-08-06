<?php
/**
 * Hackademic-CMS/pages/mainlogin.php
 *
 * The page for calling the Hackademic Login Controller
 * 
 * Copyright (c) 2012 OWASP
 *
 * LICENSE:
 *
 * This file is part of Hackademic CMS
 * (https://www.owasp.org/index.php/OWASP_Hackademic_Challenges_Project).
 *
 * Hackademic CMS is free software: you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation, either version 2 of the License, or (at your option) any later
 * version.
 *
 * Hackademic CMS is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * Hackademic CMS.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP Version 5.
 *
 * @author    Pragya Gupta <pragya18nsit@gmail.com>
 * @author    Konstantinos Papapanagiotou <conpap@gmail.com>
 * @copyright 2012 OWASP
 * @license   GNU General Public License http://www.gnu.org/licenses/gpl.html
 */

require_once HACKADEMIC_PATH."controller/class.MainLoginController.php";

$controller = new MainLoginController();
echo $controller->go();
