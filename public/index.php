<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/instructions.css">
    <title>Checkpoint PHP 1</title>
</head>
<body>

<?php include 'header.php'; ?>

<main>
    <section class="context">
        <div>
            <h1>Checkpoint PHP 1</h1>
            <h2>Al Capone's secret bribe book</h2>
            <figure class="picture">
                <img src="image/capone.jpg" alt="Al Capone">
                <figcaption>Al Capone</figcaption>
            </figure>
            <p class="overlay">1930. Prohibition. Chicago is under Al Capone's rule. Hidden bars, prohibited alcohol,
                drugs, gambling and
                prostitution.
                The mafia king thrives using violence, strength, fear, but also money. He has to distribute bribes to many
                personalities, from judges to policemen, to keep his business alive.</p>
            <p class="overlay">You are his "special" accountant. You have to keep track of all the bribes, all the
                names,
                all the payments. It is a lot of money, and a big responsibility. You need to be very organized,
                that's why
                you keep all the records in your secret book.</p>
        </div>
    </section>

    <section class="instructions" id="instructions">
        <h2>Your instructions</h2>
        <article>
            <h3>Start with some CSS (~ 1 hour)</h3>
            <ol>
                <li>First, please start by cleaning your desk. You can access it by clicking on the "Secret Book" link in
                    the navbar.
                    Carefully follow the instructions below. You can also look at the screenshots folder within the
                    image folder of
                    this project. It contains the desk configurations for all the screen sizes, as described in the
                    following points.
                </li>
                <li>At the beginning, only focus on a resolution >1200px.
                    You have to put your whisky glass on the left and your ink pen on the right of your desk, with your
                    secret book in the center.
                    (The whisky and ink pen images are already in the HTML. You have to use flexbox and respect
                    the alignment
                    of each element).<br/>
                    Do not hesitate to create html containers and customize the given stylesheet <i>book.css</i>.

                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/1200_and_more.jpg" alt="largest desk">
                        <figcaption>
                            <a href="image/screenshots/1200_and_more.jpg" target="_blank">Screenshot >1200px</a>
                        </figcaption>
                    </figure>


                </li>
                <li>Here we go! Your desk is now a little smaller. Between 1100px and 1200px, the ink pen should
                    disappear.
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/1100-1200.jpg" alt="1100-1200 desk">
                        <figcaption>
                            <a href="image/screenshots/1100-1200.jpg" target="_blank">Screenshot 1100px to 1200px</a>
                        </figcaption>
                    </figure>

                </li>
                <li>All this work is making you thirsty. Between 1000px and 1100px, replace the current whisky glass with
                    an empty one (using empty_whisky.png).
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/1000-1100.jpg" alt="1000-1100 desk">
                        <figcaption>
                            <a href="image/screenshots/1000-1100.jpg" target="_blank">Screenshot 1000px to 1100px</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    When your desk is smaller (between 800px and 1000px), the glass will also disappear.
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/800-1000.jpg" alt="800-1000 desk">
                        <figcaption>
                            <a href="image/screenshots/800-1000.jpg" target="_blank">Screenshot 800px to 1000px</a>
                        </figcaption>
                    </figure>

                </li>
                <li>
                    Finally for a desk &lt;800px, the left page of the notebook should appear below the right page.
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/320-800.jpg" alt="320-800 desk">
                        <figcaption>
                            <a href="image/screenshots/320-800.jpg" target="_blank">Screenshot 320px to 800px</a>
                        </figcaption>
                    </figure>
                </li>
            </ol>

            <h3>List the bribes (~ 1 hour)</h3>
            <ol>
                <li>Create a database called <code>checkpoint1</code>, then a table called <code>bribe</code>,
                    containing 3 fields: <code>id (int)</code>, <code>name (varchar)</code> and <code>payment (int)</code>.
                </li>
                <li>Insert manually some information into the database, which will help you to continue.</li>
                <li>With the help of PHP (finally!), create a request to get all the bribes, order them by name and
                    display them
                    in an HTML table (2 columns: name and payment), with one bribe per line. The table should appear
                    on the
                    <strong>right</strong> page of the book.
                </li>
                <li>With PHP, compute the total of the payments and display the sum at the bottom of the table (you can
                    use a <code>tfoot</code> tag!)
                </li>
            </ol>

            <h3>Add a bribe (~ 1 hour)</h3>
            <ol>
                <li>Create a form with 2 fields: name and payment and, of course, a button to submit it!</li>
                <li>Add some PHP validations: name and payment should not be empty and payment should be >0. If there
                    are errors, display them on top of the form.
                </li>
                <li>If no error, add the new bribe into the database. It should then appear in the list (after a
                    redirection!)
                </li>
            </ol>

            <p>If you have finished, you can optionally start the <a href="#bonus">bonus</a> page !</p>

        </article>

        <article class="bonus" id="bonus">
            <a class="seeBonus" href="#bonus">Bonus</a>
            <a class="closeBonus" href="#instructions">X</a>
            <h3>Bonus page</h3>
            <h4>(only if you have finished the other instructions)</h4>
            <ol>
                <li>Create an alphabetical index using all the letters. A little hint: you can use the <code>range()</code>
                    function.
                </li>
                <li>Display the index on top for the desktop-size page.
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/bonus/bonus_large.jpg" alt="large desk with bonus feature">
                        <figcaption>
                            <a href="image/screenshots/bonus/bonus_large.jpg" target="_blank">Screenshot bonus >800px</a>
                        </figcaption>
                    </figure>
                </li>

                <li>On small devices (&lt;800px), the index should appear on the right. Do not hesitate to reorganize the
                    flexbox containers in the HTML if needed
                    <figure class="thumbnail" id="clean">
                        <img src="image/screenshots/bonus/bonus_small.jpg" alt="large desk with bonus feature">
                        <figcaption>
                            <a href="image/screenshots/bonus/bonus_small.jpg" target="_blank">Screenshot bonus &lt;800px</a>
                        </figcaption>
                    </figure>

                </li>

                <li>Each letter should be a link, with a query string indicating the letter. e.g, for the letter 'A', it
                    should be : <i>href="?letter=A"</i>
                    Then, when you click on a letter, change the previous SELECT request to get only the results for the
                    name starting with this letter, instead of all results.
                </li>
                <li>Furthermore, display the chosen letter at the top of the right page of the notebook.</li>
                <li>The total should reflect only the results displayed on the page</li>
                <li>Add a last validation for the form. When you try to add the name "Eliott Ness", the error "This man
                    is untouchable" should appear.
                </li>
            </ol>
            <figure class="picture ness">
                <img src="image/ness.jpeg" alt="Eliott Ness">
                <figcaption>Eliott Ness</figcaption>
            </figure>
        </article>
    </section>
</main>
</body>
</html>
