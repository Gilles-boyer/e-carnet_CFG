# e-carnet_CFG
## Resume
> Le E-carnet cfg permettra de dématérialiser le carnet de suivi pour l efk , il permettra de suivre l évolution des enfant avoir un historique et permettre au parent de consulté le carnet . Dedans le carnet nous aurons le suivi de présence et des exams
## Backlog

En tant que|Je veux|Afin de|Taches|Priorite
:---|:---|:---|:---|:---
=> Parent et Enfant|voir de façon sécurisé le carnet de mon enfant|voir ces date de stage et suivre son évolution|-créer un controler spécifique pour cripter lors de la création de l'enfant -créer un lien securisé -afficher une vue avec les infos de l'enfant|
=> Moniteur|voir, créer, desactiver des enfants|gérer l'attribution des enfants et lié avec des activités (ecoles et exam)|-creation des routes -creation de formulaire -creation controler|
=> Moniteur|voir, creer, desactiver des écoles|gestion appli|-route -formulaire -controler|
=> Moniteur|voir, creer, desactiver des exams|gestion appli|-route -formulaire - controler|
=> Admin |creer des users avec password, role, et autres|gestion appli| -route spec - formulaire -controler|

## Liste des routes

> Role
- post('/role/create', 'store($request)')
- put('/role/update'), 'update($request)')
- get('/roles' 'index()')
> User
- post('/user/create', 'store($request)')
- put('/user/update'), 'update($request)')
- post('/user/password/create', password($request))
- post('/user/password/update', updatePassword($request))
- delete('/user/delete') delete($request))
- get('/roles' index())
> Enfant
- post('/children/create', 'store($request)')
- put('/children/update'), 'update($request)')
- get('/childrens')->with(all())
> School 
- post('/school/create', 'store($request)')
- put('/school/update'), 'update($request)')
- get('/school/childrens), index($date) return all children for this date
> Exam 
- post('/exam/create', 'store($request)')
- put('/exam/update'), 'update($request)')
- post('/exam/attribute') 'post($request)

