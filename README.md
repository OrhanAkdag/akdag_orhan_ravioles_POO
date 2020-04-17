# akdag_orhan_ravioles_POO

Réponse questions théoriques:


Question [1]
```
interface loginInterface {
    public function login($user, $password);
} 

class LeNomDeMaClasse implements loginInterface{ 

    public function login($user, $password){
        $this->user = $user;
        $this->password = $password;
}
```

Question [2]
```

public function __construct()
{
}
est appelé quand on fait new

public function __destruct()
{
}
est appelé à la fin du script, ou quand c'est explicitement demandé pour destruct

public function __get($name)
{
}
Permet de détecter l’accession à un attribut qui n’existe pas
Prend en paramètre le nom de l’attribut

public function __set($name, $value)
{
}
est appelé quand on essaie d'affecter une variable à un attribut qui n'existe pas ou qui est privé
$name correspond au nom de la variable concerné et $value à sa valeur

public function __isset($name)
{
}
méthode appelée quand isset() ou empty() sont appelées sur des propriétés inaccessibles (privées) ou inexistante
regarde si $name est défini, renvoie un booléen.

public function __unset($name)
{ 
}
méthode appelée quand __unset() est appelé sur des propriétés inaccessibles (privées) ou inexistante
efface $name.
}
```
Question [3]
```
je suis:  
public function __destruct()
{
}    
```
Question [4]
```
je suis une classe abstraite:  
abstract class MaClassAbstraite {
}
utilisation en héritage:
class ClassHeritage extends MaClassAbstraite 
{
} 
```
Question [5]
```
public : accessible en dehors de l'objet
protected: accessible par l'objet lui même et les classes qui en hérite
private : seul l'objet créé aura accès à ces attributs 
```
Question [6]
```
Sert à gérer les erreurs, il contiendra un message d’erreur.
throw new exception 
```
Question [7]
```
Le router va appeler les fonctions correspondantes en fonction de paramètres passés dans l’url
la variable super globale est $_GET
```
Question [8]
```
ça pose des bases universel, un développeur qui reprendra le travail comprendra le projet grace au MVC
évite de mettre du html la ou il faut pas par exemple dans le modèle.
```
Question [9]
```
model on trouvera nos classe
view on trouvera notre html
controller sera le traitement
```
