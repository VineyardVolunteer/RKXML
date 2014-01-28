RKXML
=====

Application to generate XML files used by the Vineyard Roku channel.

##Deliverables

The Vineyard Roku channel is controlled by several files:  
**[categories.xml][categories]** - this is an index for the channel. It has 3 *&lt;category>* sections pointing to 1) the current series sermon videos 2) the archives (of past sermons) and 3) worship sets for each series. Within each category are *&lt;categoryLeaf>* subsections that each point to a distinct XML file for that series of videos

**&lt;series-name>.xml** - this is a file with the details on a particular series. It's named after the title of the series downcased with any punctuation and whitespace removed. Here is an example for the "Renew" [series]. For a recurring series we usually differentiate by adding a year (for instance simplifychristmas2013).

**&lt;series-name>worship.xml** - exactly the same as the previous file but this points to the worship videos. The sermons and worship sets are separate videos with separate subchannels. If you look at the *&lt;streamUrl>* fields you'll notice that they are exactly the same except the worship version has a 'w' prepended to the date. Here you can find the [worship] file for the "Renew" series.

**index.html** - this is just a backup file so sites can still pull videos if for some reason the Roku isn't working for them.

[categories]: http://vineyardcincinnati.com/roku/categories.xml
[series]: http://vineyardcincinnati.com/roku/renew.xml
[worship]: http://vineyardcincinnati.com/roku/renewworship.xml

This application should update the categories.xml and index.html files and create 2 new files for each series (series and worship).
Quite a bit of information can be reused or generated from user input.

##Project files

Here are the main parts:
* **xmlgen.php** - the start page. It asks the user for how many weeks there are in the series, then does an XMLHttpRequest (using the select\_weeks function) to xmlcreate.php to get data to create a form. Once the form is submitted it returns the data to xmlcreate.php which writes out the XML file.
* **xmlcreate.php** - this part does the work. It pulls HTML from the database to generate the form xmlgen.php uses then receives POST data from xmlgen.php on submit which it uses to generate the XML file and write it to disk. Currently it only does the main series file, but could be expanded to create or update the other files.
* **xml_data.csv** - a dump of the database in CSV format
* **xml_data.sql** - same as above, but in a format that can be run against a MySQL database to populate it. It doesn't make the database table, but you can do that with: CREATE TABLE `xml_data` ( `id` int(11) DEFAULT NULL, `html` varchar(30000) DEFAULT NULL);
* **generator.html** - a demo from Kenny on how to generate the form with Javascript rather than pulling pregenerated content from a database.

