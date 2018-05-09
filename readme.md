# Project 4
+ By: Marc-Eli Faldas
+ Production URL: <http://p4.dwa15marcelifaldas.win>

## Database

Primary tables:
  + `users`
  + `verbs`
  
Pivot table(s):
  + `user_verb`


## CRUD

__Create__
  + Login with Credentials (E-Mail: susanbuck@gmail.com Password: PlayIsGood)
  + Visit <http://p4.dwa15marcelifaldas.win/verbs/search>
  + Enter Query
  + Click *Search*
  + Observe results (Click on English Translation Link)
  + Choose Verb
  + Press Add
  + Redirects to <http://p4.dwa15marcelifaldas.win/saved>
  
__Read__
  + Login with Credentials (E-Mail: susanbuck@gmail.com Password: PlayIsGood)
  + Visit <http://p4.loc/verbs/search>
  + Enter Query
  + Click *Click Search*
  + Observe results
  
__Update__
  + Only two User have authority to Edit: E-Mail: susanbuck@gmail.com (Password: PlayIsGood) and E-Mail: marcfaldas@gmail.com (Password: SleepIsGood)
  + Login with Credentials (E-Mail: susanbuck@gmail.com Password: PlayIsGood)
  + Visit <http://p4.dwa15marcelifaldas.win/verbs/search>
  + Enter Query
  + Click *Search*
  + Observe results (Click on English Translation Link)
  + Choose Verb
  + Press Edit
  + Redirects to http://p4.dwa15marcelifaldas.win/edit?toEdit={verb}> ( {verb} = Verb Id)
  + Make Changes
  + Redirects back to http://p4.dwa15marcelifaldas.win/edit?toEdit={verb}> ( {verb} = Verb Id) with Alert
  
  
__Delete__
  + Login with Credentials (E-Mail: susanbuck@gmail.com Password: PlayIsGood)
  + Add Verbs to Saved List if No Verbs were added yet
  + Visit <http://p4.dwa15marcelifaldas.win/saved>
  + Click Checkbox for Verbs you would like to remove from Pivot Table
  + Press Delete
  + Observe deletions with alert message  

## Outside resources
#### Navbar Code
__Right and Left Sections:__
[Navbar Code: Right and Left Sections](https://stackoverflow.com/questions/19733447/bootstrap-navbar-with-left-center-or-right-aligned-items)
HTML Code see in : nav.blade.php

__Navbar Collapse:__
[Navbar Deactivate Collapse](https://stackoverflow.com/questions/23535289/bootstrap-3-disable-navbar-collapse?utm_medium=organic&utm_source=google_rich_qa&utm_campaign=google_rich_qa)

__CSS Style from Lecture/Foobooks:__
```
nav ul li {
    display: inline-block;
    margin-top: 5px;
    padding: 10px;
}

nav ul li a:link {
    text-decoration: none;
    font-weight: bold;
    text-transform: uppercase;
```
#### Style CSS from Lecture/Foobooks
Incorporated some of my own styles such as font changes.
```
/*----------------------------------------------------
Forms - Code From Lecture/Foobooks
-----------------------------------------------------*/
label, legend {
    display: block;
    margin-top: 20px;
    margin-bottom: 0;
    text-align: left;
    font-size: 12px;
    font-size: 1.2rem;
    letter-spacing: .75px;
    font-weight: bold;
    text-transform: uppercase;
}

input[type=text], input[type=email], input[type=password], textarea, select {
    display: block;
    width: 100%;
    font-size: 1.5rem;
    padding: 3px;
    font-family: "Courier New", Courier, monospace; /*<--Code Change*/
}

input[type='checkbox'], input[type='radio'] {
    display: inline;
}

input[type='checkbox'] + label {
    display: inline;
    font-weight: normal;
}

.btn {
    margin-top: 20px;
}

.error {
    list-style-type: none;
    color: #a94442; /* reddish */
    text-align: left;
    margin: 0;
    padding: 0;
    font-size: 1.2rem;
    font-size: 12px;
    font-style: italic;
}

.success {
    color: #3c763d; /* greenish */
}

.alert {
    margin-top: 10px;
}

.details {
    font-size: 1.1rem;
    font-size: 11px;
    font-style: italic;
}

/*----------------------------------------------------
Sticky Footer
-----------------------------------------------------*/
footer {
    text-align: center;
    background-color: #eee;

    /* sticky footer */
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px;
    line-height: 60px; /* Vertically center the text there */
}
```

__Div Opacity:__
[CSS Style Code for Div Opacity](https://stackoverflow.com/questions/3969380/achieving-white-opacity-effect-in-html-css)

__Filipino Verbs and Japanese Roots:__
[Filipino Verbs](http://www.seasite.niu.edu/tagalog/tagalog_verbs.htm)
[Japanese Verbs](http://www.japaneseverbconjugator.com)

## Code style divergences
about.blade.php: Lines 28, 31, 45, 48 - More than 180 characters per line due to being descriptions. 

## Notes for instructor

Please note the following:
* Navbar does retain some of its collapse features.
* Forms Code based on Lecture/Foobooks Code
* Only Users Susan Buck (E-Mail: susanbuck@gmail.com Password: PlayIsGood) and Marc Faldas (E-Mail: marcfaldas@gmail.com Password: SleepIsGood) can edit.
* Not all verbs have a Japanese Counterpart as I only provided the one's that I know of.  No Japanese Translation provided will have 'N/A'.
* 'Forgot Password' feauture was not implemented as this is just a demo.