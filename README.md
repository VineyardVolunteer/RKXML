RKXML
=====

Application to generate XML files used by the Vineyard Roku channel.

The Vineyard Roku channel is controlled by several files: 

[categories.xml][categories] - this is an index for the whole channel. It has 3 &lt;category> sections pointing the the current series sermon videos, the archives (of past sermons) and worship sets for each series. Within each category are <categoryLeaf> subsections that each point to a distinct XML file for that series of videos

&lt;series-name.xml> - this is a file with the details on a particular series. It's named after the title of the series downcased with any punctuation and whitespace removed. Here is an example for the "Renew" [series]. For a recurring series we usually differentiate by adding a year.

&lt;series-nameworship.xml> - exactly the same as the previous file but this points to the worship videos. The sermons and worship sets are separate videos with separate subchannels. If you look at the &lt;streamUrl fields you'll notice that they are exactly the same except the worship version has a 'w' prepended to the date. Here you can find the [worship] file for the "Renew" series.

index.html - this is just a backup file so sites can still pull videos if for some reason the Roku isn't working for them.

[categories]: http://vineyardcincinnati.com/roku/categories.xml
[series]: http://vineyardcincinnati.com/roku/renew.xml
[worship]: http://vineyardcincinnati.com/roku/renewworship.xml

This application should update the categories.xml and index.html files and create 2 new files for each series (series and worship).
Quite a bit of information can be reused or generated from user input.
