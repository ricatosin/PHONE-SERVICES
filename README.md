# PHONE-SERVICES
Simple Phone API using Laravel + React.

1 - This is a simple Application that uses Laravel to generate random names DDD and Phones add them to to Mysql database and serve as an api using HTTP Methods, for more info go to Usage Section.

## Installation

Laravel dependencies and npm/yarn to use this application. First clone the repo or download it as a zip. Next, i have developed only the master branch for this application with Laravel + React.

Laravel Back end
Setup your DB, .env file, take care of migration and seeding. If you're in doubt, please send-me and email. Once you are done with that, run php artisan serve. 

The api is accessible at http://localhost:8000/api/phones


React front-end
To make React work, run npm install && npm run dev. Alternatively you can use yarn  too. Now, head over to http://localhost:8000/

## Usage

```
After Build All project.

Open your terminal CD to project folder, run the ''php artisan serve'' to run server .
Open second terminal CD inside the project folder run ''npm run watch'' to update changes directly in JS.

```
### API
GET::http://localhost:8000/api/phones = Return all objects in API in JSON format
GET::http://localhost:8000/api/phones/1 Return an object with ID '1' in JSON format
DELETE::http://localhost:8000/api/phones/1 DELET an object with ID '1'.
POST::localhost:8000/api/phones/?nome=Duck Donald&ddd=41&phone_number=949218741 insert in database.
PUT::localhost:8000/api/phones/7/?nome=Duck Donald&ddd=41&phone_number=949218741 update id=7 with new info



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
osl-3.0
