    DEVELOPER Exercise 1.1 for S'NCE

"A new pokemon tournament is coming soon and you must create a strong team to try to excel at the competition!"

The webpage uses the Pokemon API at https://pokeapi.co/.

On browsing into the index of the webpage one finds two buttons:
Create Team and Team Listing which redirect to /team/create and /team/list respectively.

Every page has a Home button that redirects to the index.

The /team/create page offers the capability to Create your own Pokemon team by naming it.
On creating a team (with valid input ofcourse) appears the "Gotta Catch 'Em All" button.

By clicking that button the webpage communicates with the API and returns a new pokemon to both
the database (whilst also linking it to the team created) and it's name, base experience, image, abilities and types.
Every team can have up to 10 Pokemons.

Onto the /team/list page now we can see bordered cells with the details of all our teams (sorted by creation date and the most recent being on top).
Each team shows the name of the team, the images of the Pokemons that belong in it, the sum of their base experiences, the list of their types.
There is also a capability to filter the results by type of Pokemon (the blank filter shows all the results).

Note: The /team/list page uses a cache mechanism (App\Repository\Teams) to facilitate and quicken the retrieval of the Teams.

Finally, should a user require to edit a specific team he can do so through the Edit Team button next to each respective team.
Through that, he will be redirected to the /team/{team_id}/edit page where he has numerous ways to edit his selected team.
First and foremost, he can change the name of the team. Secondly, by using the "Gotta Catch 'Em All" button he can add another Pokemon to the team.
He can also set free a Pokemon through the "Set Free" button.

Note: Any of the add and remove actions are reflected on the sum of the base xp of the team (obviously).

If a team has no remaining Pokemons the User can finally delete the team itself.

###CONFIG

We will be using three containers so we run docker-compose.

On running "docker-compose build && docker-compose up -d" the three containers: app, db and webserver are created and start running.

Next, we need to execute "docker-compose exec app composer install" to retrieve the dependencies of our project.

And finally we need to populate the database with tables through the docker terminal using: "docker-compose exec app php artisan migrate".

Running on localhost port 80 with mysql on port 3306

Ioannis Loukopoulos

