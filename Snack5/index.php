<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->


<?php 

$testo = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia odit fuga natus ullam maxime architecto itaque minima perspiciatis asperiores, minus officiis eos voluptatum facilis nisi ipsam laudantium doloribus modi corrupti.
Nam hic, reiciendis magni eligendi corporis sapiente, ipsam explicabo modi quod impedit amet, eos eius? Aut blanditiis labore aliquid, sunt quasi omnis fugiat at animi nemo quisquam natus, assumenda cumque.
Maxime, aliquid vel officiis harum qui laudantium. Iste doloremque fugiat vero repellendus ipsam rerum alias ut repudiandae asperiores quasi sunt minus autem eius, atque quae architecto animi quod in quia!';

$paragrafo = explode('.', $testo);

for ($i=0; $i < count($paragrafo); $i++) { 
    echo '<br>';
    echo $paragrafo[$i];
}








?>
