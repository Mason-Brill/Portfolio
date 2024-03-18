This is an independent study project that will ultimately become a portfolio website.
It utilizes the LAMP stack. There exist two Docker files that run two Docker containers. 
One is the web container that is running an apache image while the other is a mysql
contaier running the latest image for mysql. There is a general Docker file that when
run, will use both of these other Docker files and will create the two containers. The 
heroku.yml is used to tell heroku(the hosting provider), which dockerfiles to run. There
really only exist two files that are run for the website, index.php and index.css.
which of course is the website content and styling to go with it. Inside of index.php you will see
some code that connects to the mysql database and queries it for some information in regards to
projects I have completed. The mysql container is ran with the init.sql script to populate the
database with said projects.

To run this website locally, run the following commands

    1.  on line 58 in "index.php", replace "getenv("JAWSDB_URL")" with the JawsDB string that
        can be found through the link to the JawsDB dashboard on heroku

    2.  docker build -t portfolio -f Dockerfile.www .

    3.  docker run -e PORT=8080 -p 8000:8080 portfolio