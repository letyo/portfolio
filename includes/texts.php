<?php

/* ------------------------ header --------------------------*/

	$header["de"]['about'] = "Über mich";
	$header["en"]['about'] = "About me";
	$header["hu"]['about'] = "rólam";

	$header["de"]['projects'] = "Projekte";
	$header["en"]['projects'] = "Projects";
	$header["hu"]['projects'] = "projektek";

	$header["de"]['contact'] = "Kontakt";
	$header["en"]['contact'] = "Contact";
	$header["hu"]['contact'] = "kapcsolat";

/* ------------------------ about me --------------------------*/

	$about_me_title["de"] = "Etwas über mich";
	$about_me_title["en"] = "A few words about me";
	$about_me_title["hu"] = "rólam";

	$about_me["de"] = 
		"<p>Liebe(r) BesucherIn,</p>
		<p>willkommen auf meiner Webseite!</p>
		<p>Mein Name ist Gábor Hetyey. Ich bin 28 Jahre alt und ich komme aus Ungarn, wohne allerdings schon seit einigen Jahren in Wien.</p>
		<p>In dem letzten Jahr habe ich mich neben meinem Bauingenieur Studium immer mehr mit der Programmierung beschäftigt. Im Laufe der Zeit war ich dafür immer mehr begeistert, und ich habe mich als ein Programmierer in meinem 5-jährigen Plan vorgestellt. </p>
		<p>Mir ist klar, dass ich gegenüber denen, die Programmieren an einer Universität studiert haben, einen Nachteil habe. Aber weißt Du, was man einen Programierer, der dutzende Programmiersprachen kennt, beim Bewerbungsgespräch fragt? Bist du bereit noch eine zu lernen? Und ich kann Dir versichern, dass ich sehr wissbegierig und in der Lage bin, mir neue Programmiersprachen anzueignen!</p>
		<p>PS: Dies ist nur eine einfache Version meiner Webseite, die professionelle Version ist nur für jene verfügbar, die mich einstellen. <img src='img/smiley.png' style='height: 1.5rem'/></p>";
	$about_me["en"] = 
		"<p>Dear Visitor,</p>
		<p>welcome to my site!</p>
		<p>My name is Gábor Hetyey. I'm 28 years old, and I'm from Hungary, however, currently I'm living in Vienna.</p>
		<p>In the last year I started to learn programming beside my Civil Engineering studies. As time passed, I got more into it and I started to imagine myself as a programmer in my 5 years plan.</p>
		<p>I assume I have a disadvantage up against those, who started to study it in a university, but do You know, what they ask from the programmer, who knows a dozen programming languages at the job interview? Are you willing to learn one more? And I can assure you, that I'm eager to learn more languages!</p>
		<p>PS: This is only the light version of my site, the pro version is only available for those, who hire me. <img src='img/smiley.png' style='height: 1.5rem'/></p>";
	$about_me["hu"] = "rólam hosszú";

/* ------------------------ what i know --------------------------*/

	$i_know_title["de"] = "Was ich kann";
	$i_know_title["en"] = "Things I know";
	$i_know_title["hu"] = "mit tudok";

	$i_know["de"][1] = "HTML";
	$i_know["de"][2] = "CSS, SASS, Bootstrap, Responsive Design";
	$i_know["de"][3] = "SQL, MySQL";
	$i_know["de"][4] = "Javascript, jQuery, Ajax, AngularJS";
	$i_know["de"][5] = "PHP, Frameworks";
	$i_know["de"][6] = "Laravel, Blade, Artisan commands, Elixir";
	$i_know["de"][7] = "GULP, GRUNT";
	$i_know["de"][8] = "Terminal, Composer";
	$i_know["de"][9] = "Github, Stackoverflow";
	$i_know["en"] = $i_know["de"];
	$i_know["hu"] = $i_know["de"];

/* ------------------------ what i read --------------------------*/

	$i_read_title["de"] = "Worüber ich viel gelesen habe, aber nicht verwendet";
	$i_read_title["en"] = "Things I've read a lot about, but haven't really used";
	$i_read_title["hu"] = "amit olvastam";

	$i_read["de"][1] = "LESS";
	$i_read["de"][2] = "NodeJS";
	$i_read["de"][3] = "Drupal";
	$i_read["en"] = $i_read["de"];
	$i_read["hu"] = $i_read["de"];

/* ------------------------ the projects --------------------------*/

	$about_projects_title["de"] = "Über die Projekte";
	$about_projects_title["en"] = "About the projects";
	$about_projects_title["hu"] = "a projektekről";

	$about_projects["de"] = "Ich möchte nun zeigen, dass ich wirklich über die Sachen gehört habe, welche ich in meinem Lebenslauf geschrieben habe. Zur Zeit sind es nur wenige, aber als Übung und zum Zeigen, was ich gelernt habe, werde ich mehr machen.";
	$about_projects["en"] = "My intention was to present fractures of my knowledge regarding to as many programming languages as possible. In the future, I'm planning to extend both the quantity and the quality of the projects.";
	$about_projects["hu"] = "a projektekről hosszú";

/* ------------------------ title --------------------------*/

	$projects["websites"]["de"] = "Webseiten";
	$projects["websites"]["en"] = "Websites";
	$projects["websites"]["hu"] = "Weblapok";

	$projects["games"]["de"] = "Spiele";
	$projects["games"]["en"] = "Games";
	$projects["games"]["hu"] = "Játékok";

/* ------------------------ explanation --------------------------*/

	$projects["honey"]["text"]["de"] = 'Mein erste seriösere Webseite. Ja ich weiß, es ist ein bisschen gelb. (aber Honig, Bienen -> gelb) Mein Ziel war eher das Hintergrundprogramm als die Aussicht.';
	$projects["honey"]["text"]["en"] = 'To be honest, this is the first website I created and I assumed, that yellow suits well to the subject of it (honey, bees). In my opinion, the design is very important to draw attention, however, at this case I focused on back-end rather than front-end.';
	$projects["honey"]["text"]["hu"] = '';

	$projects["reisen"]["text"]["de"] = 'Hier war mein Ziel eher die gute Aussicht, aber ich hätte auch gern eine bessere Log In Seite gemacht und ich denke, dass ich es hier erreicht habe. (eingeloggt bleiben mit Cookie, bruteforce prüfen, E-Mail schicken, wenn Passwort mehrmals falsch eingetippt ist) Ich habe "parallax" verwendet, und "lightbox" mit rein JavaScript programmiert. Es gibt auch einen kleinen Lader und "jump-to-the-top button" da.';
	$projects["reisen"]["text"]["en"] = 'My primary goal was the design of the front-end, however, I wanted to create a login page, too. I believe, I managed to do it successfully and I\'m pretty satisfied with the result (stay logged in with cookie, check for bruteforce and send an email, if the password had been mistyped several times). I built the website with parallax scrolling, for the lightbox, I used pure JavaScript and I even created a jump-to-top button with jQuery.';
	$projects["reisen"]["text"]["hu"] = '';

	$projects["fight"]["text"]["de"] = 'Mein erstes "größeres" Projekt. Ich wollte es gern ausprobieren, wie schwer es ist, ein solches Spiel mit JavaScript zu programmieren. Das Programm ist sehr einfach, es gibt auch keine Möglichkeit zu speichern. Ich habe vor, dieses Spiel weiter zu entwickeln, aber ich habe auch mehrere Ideen über andere Programmen/Webseiten.';
	$projects["fight"]["text"]["en"] = 'This is a practice project. I just wanted to dig myself in the creation of games by JavaScript. Despite it is very simple (you can\'t even save), but on the other hand it is very funny. I intend to extend it with various attack-options (weapons, spells) and a save button, beside the creation of new programs and websites.';
	$projects["fight"]["text"]["hu"] = '';

/* ------------------------ overlay text --------------------------*/

	$projects["honey"]["overlay_text"]["de"][1] = "HTML & CSS";
	$projects["honey"]["overlay_text"]["de"][2] = "PHP";
	$projects["honey"]["overlay_text"]["de"][3] = "JavaScript & jQuery";
	$projects["honey"]["overlay_text"]["de"][4] = "Ajax";
	$projects["honey"]["overlay_text"]["de"][5] = "MySQL";	
	$projects["honey"]["overlay_text"]["en"] = $projects["honey"]["overlay_text"]["de"];
	$projects["honey"]["overlay_text"]["hu"] = $projects["honey"]["overlay_text"]["de"];

	$projects["reisen"]["overlay_text"]["de"][1] = "HTML & CSS";
	$projects["reisen"]["overlay_text"]["de"][2] = "PHP";
	$projects["reisen"]["overlay_text"]["de"][3] = "JavaScript & jQuery";
	$projects["reisen"]["overlay_text"]["de"][4] = "MySQL";	
	$projects["reisen"]["overlay_text"]["en"] = $projects["reisen"]["overlay_text"]["de"];
	$projects["reisen"]["overlay_text"]["hu"] = $projects["reisen"]["overlay_text"]["de"];

	$projects["fight"]["overlay_text"]["de"][1] = "HTML & CSS";
	$projects["fight"]["overlay_text"]["de"][2] = "PHP";
	$projects["fight"]["overlay_text"]["de"][3] = "JavaScript";
	$projects["fight"]["overlay_text"]["de"][4] = "Ajax";
	$projects["fight"]["overlay_text"]["de"][5] = "MySQL";
	$projects["fight"]["overlay_text"]["en"] = $projects["fight"]["overlay_text"]["de"];
	$projects["fight"]["overlay_text"]["hu"] = $projects["fight"]["overlay_text"]["de"];

/* ------------------------ contact --------------------------*/

	$contact_key = "contact_form";
	$contact_header_de = $header["de"]['contact'];
	$contact_header_en = $header["en"]['contact'];
	$contact_header_hu = $header["hu"]['contact'];

	$contact_title["de"] = "Wie kann man mit mir Kontakt aufnehmen";
	$contact_title["en"] = "How to get in contact with me";
	$contact_title["hu"] = "kapcsolat";

	$contact["de"]["name"] = "Gábor Hetyey";
	$contact["de"]["email"] = "E-mail: hetyey.g@gmail.com";
	$contact["de"]["linkedin"] = "Mein LinkedIn Profil: <a href='https://www.linkedin.com/in/g%C3%A1bor-hetyey-a6415bb0/' class='link' target='_blank'>LinkedIn</a>";
	$contact["de"]["github"] = "Mein GitHub Profil: <a href='https://github.com/letyo' class='link' target='_blank'>GitHub</a>";
	$contact["de"]["direct_contact"] = 
<<<EOT
		Direkt Kontakt: Benutzen Sie bitte das <span class="link" onclick="nav('$contact_key', '$contact_header_de')">Kontaktformular</span>!
EOT;

	$contact["en"]["name"] = "Gábor Hetyey";
	$contact["en"]["email"] = "E-mail: hetyey.g@gmail.com";
	$contact["en"]["linkedin"] = "My LinkedIn account: <a href='https://www.linkedin.com/in/g%C3%A1bor-hetyey-a6415bb0/' class='link' target='_blank'>LinkedIn</a>";
	$contact["en"]["github"] = "My GitHub account: <a href='https://github.com/letyo' class='link' target='_blank'>GitHub</a>";
	$contact["en"]["direct_contact"] = 
<<<EOT
		Direct contact: Please use the <span class="link" onclick="nav('$contact_key', '$contact_header_en')">contact form</span>!
EOT;

	$contact["hu"]["name"] = "Hetyey Gábor";
	$contact["hu"]["email"] = "E-mail: hetyey.g@gmail.com";
	$contact["hu"]["linkedin"] = "A LinkedIn profilom: <a href='https://www.linkedin.com/in/g%C3%A1bor-hetyey-a6415bb0/' class='link' target='_blank'>LinkedIn</a>";
	$contact["hu"]["github"] = "A GitHub profilom: <a href='https://github.com/letyo' class='link' target='_blank'>GitHub</a>";
	$contact["hu"]["direct_contact"] = 
<<<EOT
		Közvetlen kapcsolat: Kérem használja a <span class="link" onclick="nav('$contact_key', '$contact_header_hu')">kontaktlapot</span>!
EOT;

/* ------------------------ contact form --------------------------*/

	$placeholder["name"]["de"] = "Schreiben Sie bitte Ihren Name hier!";
	$placeholder["email"]["de"] =  "Schreiben Sie bitte Ihre E-Mail-Adresse hier!";
	$placeholder["subject"]["de"] = "Schreiben Sie bitte den Betreff hier!";
	$placeholder["message"]["de"] = "Schreiben Sie bitte die Nachricht hier!";

	$placeholder["name"]["en"] = "Please write your name here!";
	$placeholder["email"]["en"] = "Please write your email address here!";
	$placeholder["subject"]["en"] = "Please write the subject here!";
	$placeholder["message"]["en"] = "Please write your message here!";

	$placeholder["name"]["hu"] = "";
	$placeholder["email"]["hu"] = "";
	$placeholder["subject"]["hu"] = "";
	$placeholder["message"]["hu"] = "";

	$labels["name"]["de"] = "Name";
	$labels["email"]["de"] = "E-Mail-Adresse";
	$labels["subject"]["de"] = "Betreff";
	$labels["message"]["de"] = "Nachricht";
	$labels["button"]["de"] = "Absenden";

	$labels["name"]["en"] = "Name";
	$labels["email"]["en"] = "Email address";
	$labels["subject"]["en"] = "Subject";
	$labels["message"]["en"] = "Message";
	$labels["button"]["en"] = "Send";

	$labels["name"]["hu"] = "";
	$labels["email"]["hu"] = "";
	$labels["subject"]["hu"] = "";
	$labels["message"]["hu"] = "";
	$labels["button"]["hu"] = "";

	$email_error["de"] = "Geben Sie bitte eine existierende E-Mail-Addresse ein!";
	$email_error["en"] = "Please enter a valid email address!";
	$email_error["hu"] = "";

	$empty["de"] = "Füllen Sie bitte alle Eingabefelder aus!";
	$empty["en"] = "Please fill out all input fields!";
	$empty["hu"] = "";

	$successful["de"] = "Ihre Nachricht wurde erfolgreich weitergeleitet!";
	$successful["en"] = "Your message has been successfully sent!";
	$successful["hu"] = "";

?>