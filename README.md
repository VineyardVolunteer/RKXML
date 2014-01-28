RKXML
=====

Application to generate XML files used by the Vineyard Roku channel.

##Project files

Here are the main parts:
* **xmlgen.php** - the start page. It asks the user for how many weeks there are in the series, then does an XMLHttpRequest (using the select\_weeks function) to xmlcreate.php to get data to create a form. Once the form is submitted it returns the data to xmlcreate.php which writes out the XML file.
* **xmlcreate.php** - this part does the work. It pulls HTML from the database to generate the form xmlgen.php uses then receives POST data from xmlgen.php on submit which it uses to generate the XML file and write it to disk. Currently it only does the main series file, but could be expanded to create or update the other files.
* **xml_data.csv** - a dump of the database in CSV format
* **xml_data.sql** - same as above, but in a format that can be run against a MySQL database to populate it. It doesn't make the database table, but you can do that with: CREATE TABLE `xml_data` ( `id` int(11) DEFAULT NULL, `html` varchar(30000) DEFAULT NULL);
* **generator.html** - a demo from Kenny on how to generate the form with Javascript rather than pulling pregenerated content from a database.

##Input data
 * per series
  1. Start date - this is the first Sunday of the series
  2. Image path - this should be the same for the whole series. It's a graphic the Roku shows to represent each series.
  3. Series name - currently this should be entered lower-case, all one word. Eventually we should accept a phrase then convert it to correct format.
 * per week (within a series)
  1. Title - the title of that particular sermon 
  2. ContentID - this is just a 5 digit serial number for the individual video. The ID for the first sermon in a series is 1 more than the last ID in the last series. The sermon ID starts with 1, and worship ID starts with 2 (so if the sermon ContentID is 12345, worshp is 22345). Obviously once we get one ContentID we can generate the IDs for the rest of the series. Eventually we should store this in a database so on a new series we just look up the last ContentID of the previous series.
  3. Synopsis - summary of the sermon including name of the speaker if known (e.g. 'Dave Workman speaks about the power of monkeys')
  4. Worshp synopsis - summary of worship set including name of worship leader and a list of songs performed

 Anything else we need can be generated from this data. 

##Output data

The Vineyard Roku channel is controlled by several files:  
**[categories.xml][categories]** - this is an index for the channel. It has 3 *&lt;category>* sections pointing to 1) the current series sermon videos 2) the archives (of past sermons) and 3) worship sets for each series. Within each category are *&lt;categoryLeaf>* subsections that each point to a distinct XML file for that series of videos

**&lt;series-name>.xml** - this is a file with the details on a particular series. It's named after the title of the series downcased with any punctuation and whitespace removed. Here is an example for the "Renew" [series]. For a recurring series we usually differentiate by adding a year (for instance simplifychristmas2013).

**&lt;series-name>worship.xml** - exactly the same as the previous file but this points to the worship videos. The sermons and worship sets are separate videos with separate subchannels. If you look at the *&lt;streamUrl>* fields you'll notice that they are exactly the same except the worship version has a 'w' prepended to the date. Here you can find the [worship] file for the "Renew" series.

**index.html** - this is just a backup file so sites can still pull videos if for some reason the Roku isn't working for them.

[categories]: http://vineyardcincinnati.com/roku/categories.xml
[series]: http://vineyardcincinnati.com/roku/renew.xml
[worship]: http://vineyardcincinnati.com/roku/renewworship.xml

This application should update the categories.xml and index.html files and create 2 new files for each series (sermon and worship). The XML files will be written to disk on the server. This needs a bit of work because the files need to be written to a location *outside* the file tree the web server can read from for security purposes.

