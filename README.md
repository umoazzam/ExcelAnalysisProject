# Easy CSV Analysis

Author: Usman Moazzam

Course: CSDS 285 Linux Tools and Scripting

## About the Project

The purpose of this project was to apply learned PHP knowledge and prior HTML/JS skill to create a simple webpage that allows users to upload csv's and returns a table with averages and other statistical summaries of each column in the CSV. The idea was to create a tool to summarize CSVs for users without them having to look at the CSV itself, giving them a snapshot of their data as well as the general distributions of all the variables in the data. 

This project was a starting point for the concept of automatic CSV analysis; If this idea were to go forward, further data analysis would be done leaning on Javascript instead of PHP. This would include analyzing the data for any notable trends and associations between variables and using a charting library (eg., D3.js) to create a visual summary report. However, these features were not developed in order to keep the focus on PHP learnings from lecture, with the express hope being to achieve the project's objective of applying PHP knowledge.

Other features that would improve the usefulness of this project include:

* Added support for more complex data analysis tasks, such as performing statistical tests or running predictive machine algorithms to allow the user to create projections
* Allowing users to select which columns to analyze or which analysis tasks to perform
* Implementing real-time updates, so that the visualization automatically updates as the user uploads new CSV files or changes the analysis parameters
* Adding security measures to prevent malicious CSV files from executing arbitrary code on the server-side.

## Implementation

### index.html

The index.html file contains the html code, which is responsible for genersting the form for uploading the CSV. Once the CSV has been uploaded, the html file passes the file to the javascript file, script.js. Once the JS and PHP files have calculated the averages, the averages are passed back to the html for table population.

### script.js

The script.js file contains the code responsible for accepting the CSV file and running any necessary checks, and then passing the CSV file to the PHP file for analysis. Once the file has been analyzed for its averages, the JS file receives the averages in JSON format, which it sends back to index.html.

### upload.php

The upload.php file contains all code responsible for data analysis. The PHP receives the CSV file from script.js, and then extracts averages from the numerical columns, and then packages them in JSON format to be sent back to script.js.

## Screenshots

Image 1: Initial Upload Page

![Image 1: Initial Upload Page](/img/InitialUploadPage.png)

Image 2: Results (Average Values Populated)

![Image 2: Initial Upload Page](/img/WorkingScreenshot.png)

## Peer Review

Author: Sarah Kugelmas

Pros:
  The concept seems incredibly useful for big data sets, I've been looking at large CSV files this semester in CSDS 351 Intro to Data Engineering and this would have been so helpful for data analysis.
  The fact that it looks at the different columns and automatically gives insight on the numerical data columns is also great, but would be even better if the user was allowed to select which columns to analyze or which analysis tasks to perform, which Usman mentioned as a mentioned potential future feature. Allowing users to customize the results they're getting would just be a nicer user-experience.

Cons:
  The website is very barebones, but could easily be made to look more aethetically pleasing.
  Although useful already, adding the additional feature of allowing users to select which columns to analyze or which analysis tasks to perform would make this page a lot more realistically usable.
  Functionality is pretty simple with the operations the program can do, but Usman addressed this by including in his other features: added support for more complex data analysis tasks, such as performing statistical tests or running predictive machine algorithms to allow the user to create projections.

Overall, it's pretty simple right now but it is an interesting idea and I can see it has the potential become even more useful.
