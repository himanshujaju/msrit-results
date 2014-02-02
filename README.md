msrit-results
=============

Scrapes results from the msrit results websites. You can view entire results by just specifying the parameters.

<h1>Parameters : </h1>
<h3>start</h3> specifies the starting usn number.
<h3>end</h3> specifies the ending usn number.
<h3>branch</h3> specifies the branch code.
<h3>year</h3> specifies the year of joining (part of USN)
<br/><br/>

Our USN is like : 1MS(year)(branch)(usn number)<br/><br/>

Branch codes are like CS,IS,EC,etc.<br/>

example url : scraper.php?year=13&branch=IS&start=1&end=100<br/>
This will fetch all the results for students enrolled in IS branch in 2013 with usn ranging from 1 to 100.

<br/><br/>
Feel free to improve!
