eve_link_details
================

Reddit bot for r/EvE powered by PhP and spaghetti. Aims to summarise eve fansite articles linked.


## Requirements

* A non-captcha Reddit account (eventually I'll add a check for this and a convienent notice).
* PHP (version number untested at the moment).
* MySQL (loaded with a couple of the EvE SDE tables).
* cURL & CronJob access (some providers prohibit this when you don't have SSH access).


## Installation 

To-do.

## Features

### zkillboard

eve_link_details has (planned) support for a wide range of zkillboard summaries. Zkillboard is a public listing of kill mails which is obtained from the API or CREST (used to be manually posted, but that's no longer supported).

#### Kill Summary

As of the moment it'll itemise the victim and give some base statistics. I'd like to eventually add a nice summary for the attackers, without making the page overly long. Each slot section is an individual table, this is so for mobile applications that don't support table markdown (shame on them) don't blow up with the text. Sadly, for some apps it puts each line of text on a newline (AlienBlue is one such example). 
