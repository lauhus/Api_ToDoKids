<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Family;
use App\Entity\User;
use App\Entity\Event;
use App\Entity\Todo;
use App\Entity\Message;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    $noms=['Hussong','Byrgiel','Canteri','Gianfurcaro','Stroppolo','Cignoni'];
    $d=new \DateTime();
    $i=0;
    foreach ($noms as $nom){
        $family=new Family();
        $family->setPseudoFamily($nom);
        $family->setCreatedAt($d);
        $family->setCreatedBy('Laurine');
        $family->setUpdatedAt($d);
        $family->setUpdatedBy('Laurine');
        
        $user=new user();
        $user->setFamily($family);
        $user->setRoles(['ROLE_PARENT']);
        $user->setPassword(password_hash('Password'.$i,PASSWORD_DEFAULT));
        $user->setEmail('email'.$i.'@mail.fr');
        $user->setFirstname('prenom');
        $user->setAvatar($i++.'_b');
        $user->setCreatedAt($d);
        $user->setCreatedBy('Laurine');
        $user->setUpdatedAt($d);
        $user->setUpdatedBy('Laurine');

        $Todo=new ToDo();
        $Todo->setUser($user);
        $Todo->setNatureTodo('Vider le lave vaisselle');
        $Todo->setDateToDo($d);
        $Todo->setChecked(false);
        $Todo->setMessageTodo('Sans oublier les couverts');
        $Todo->setCreatedAt($d);
        $Todo->setCreatedBy('Laurine');
        $Todo->setUpdatedAt($d);
        $Todo->setUpdatedBy('Laurine');

        $event=new Event();
        $event->setUser($user);
        $event->setNatureEvent('Rendez-vous Dentiste');
        $event->setDateEvent($d);
        $event->setStartEvent($d);
        $event->setEndEvent($d);
        $event->setMessageEvent('Brosse toi les dents avant.');
        $event->setCreatedAt($d);
        $event->setCreatedBy('Laurine');
        $event->setUpdatedAt($d);
        $event->setUpdatedBy('Laurine');

        $message=new Message();
        $message->setUser($user);
        $message->setMessage('J\'ai besoin d\'une paire de chaussette pour le foot');
        $message->setCreatedAt($d);
        $message->setCreatedBy('Laurine');
        $message->setUpdatedAt($d);
        $message->setUpdatedBy('Laurine');

        $manager->persist($family);
        $manager->persist($user);
        $manager->persist($Todo);
        $manager->persist($event);
        $manager->persist($message);
        }
    $manager->flush();
    }
}
