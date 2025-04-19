<!doctype html>
<html>
    <head>
        <title>E-library system</title>
        <marquee scrollamount=5 onmouseover="this.stop(); onmouseover="this.start() >
<b><i><font size="+1"><p style="color:#fff">Welcome to our <b>E-Library System</b>, the library providing Notes and Books for PDF format for the student purpose.</font></b></i>
</marquee>
        <link rel="stylesheet" type="text/css" href="style.css"/>
       </head>
    <body>
        <header>
            
            <a href="#" class="logo"><img src="images/logo.png" width="100" height="100"alt="icon" class="logo-icon"/><h6 style="font-family:courier;">E-Library  <br>&nbspSystem</h6></a>
            <ul>
              <li> 

	<a href="home.php"class="active" >GO TO LIBRARY</a>
	</li>

            </ul>
        </header>
        <section>
            <img src="images/stars.png" id="stars">
            <img src="images/moon.png" id="moon">
            <img src="images/mountains_behind.png" id="mountains_behind">
            <h2 id="text">E-LIBRARY SYSTEM</h2>
              &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp  &nbsp&nbsp&nbsp&nbsp
              <a href="#sec"  id="btn">Explore</a>
            <img src="images/mountains_front.png" id="mountains_front">
        </section>
        <div class="sec" id="sec">
            <h2>What is E-Library?</h2>
            <p>
            "Elibrary" redirects here. For the former online library eLibrary, see HighBeam Research.
A digital library, also called an online library, an internet library, a digital repository, or a digital collection is an online database of digital objects that can include text, still images, audio, video, digital documents, or other digital media formats or a library accessible through the internet. Objects can consist of digitized content like print or photographs, as well as originally produced digital content like word processor files or social media posts. In addition to storing content, digital libraries provide means for organizing, searching, and retrieving the content contained in the collection. Digital libraries can vary immensely in size and scope, and can be maintained by individuals or organizations.[1] The digital content may be stored locally, or accessed remotely via computer networks. These information retrieval systems are able to exchange information with each other through interoperability and sustainability.
</p>
<br><br><br><br>
  <h2>Features of digital libraries</h2>
            <p style="color:#fff">
            The advantages of digital libraries as a means of easily and rapidly accessing books, archives and images of various types are now widely recognized by commercial interests and public bodies alike.
Traditional libraries are limited by storage space; digital libraries have the potential to store much more information, simply because digital information requires very little physical space to contain it. As such, the cost of maintaining a digital library can be much lower than that of a traditional library. A physical library must spend large sums of money paying for staff, book maintenance, rent, and additional books. Digital libraries may reduce or, in some instances, do away with these fees. Both types of library require cataloging input to allow users to locate and retrieve material. Digital libraries may be more willing to adopt innovations in technology providing users with improvements in electronic and audio book technology as well as presenting new forms of communication such as wikis and blogs; conventional libraries may consider that providing online access to their OP AC catalog is sufficient. An important advantage to digital conversion is increased accessibility to users. They also increase availability to individuals who may not be traditional patrons of a library, due to geographic location or organizational affiliation.
No physical boundary: The user of a digital library need not to go to the library physically; people from all over the world can gain access to the same information, as long as an Internet connection is available.
Round the clock availability: A major advantage of digital libraries is that people can gain access 24/7 to the information.
<br><br>
Multiple access: The same resources can be used simultaneously by a number of institutions and patrons. This may not be the case for copyrighted material: a library may have a license for "lending out" only one copy at a time; this is achieved with a system of digital rights management where a resource can become inaccessible after expiration of the lending period or after the lender chooses to make it inaccessible (equivalent to returning the resource).
Information retrieval: The user is able to use any search term (word, phrase, title, name, subject) to search the entire collection. Digital libraries can provide very user-friendly interfaces, giving click able access to its resources.
Preservation and conservation: Digitization is not a long-term preservation solution for physical collections, but does succeed in providing access copies for materials that would otherwise fall to degradation from repeated use. Digitized collections and born-digital objects pose many preservation and conservation concerns that analog materials do not. Please see the following "Problems" section of this page for examples.
Space: Whereas traditional libraries are limited by storage space, digital libraries have the potential to store much more information, simply because digital information requires very little physical space to contain them and media storage technologies are more affordable than ever before.
Added value: Certain characteristics of objects, primarily the quality of images, may be improved. Digitization can enhance legibility and remove visible flaws such as stains and discoloration.
            </p>
            <p class="note">
                <strong><b>Libraries play an essential role in local communities by providing access to information and resources, supporting literacy and education, promoting lifelong learning, and serving as a community gathering space. So the importance of libraries can be experienced by all community members.</b></strong>
            </p>
            

           
        </div>
        <script>
            let stars=document.getElementById('stars');
            let moon=document.getElementById('moon');
            let mountains_behind=document.getElementById('mountains_behind');
            let text=document.getElementById('text');
            let btn=document.getElementById('btn');
            let mountains_front=document.getElementById('mountains_front');
            let header = document.querySelector('header');

            window.addEventListener('scroll',function(){

            
                let value = window.scrollY;
                stars.style.left = value * 0.25 + 'px';
                moon.style.top = value * 1.25 + 'px';
                mountains_behind.style.top = value * 0.5 + 'px';
                mountains_front.style.top = value * 0 + 'px';
                text.style.marginRight = value * 4 + 'px';
                text.style.marginTop = value * 1.5 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
                header.style.top = value * 0.5 + 'px';

            })
            
        </script>
    </body>
</html>