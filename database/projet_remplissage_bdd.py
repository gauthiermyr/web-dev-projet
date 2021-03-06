# -*- coding: utf-8 -*-
"""Projet remplissage BDD.ipynb

Automatically generated by Colaboratory.

Original file is located at
    https://colab.research.google.com/drive/1YiqAgqqNYKpt1WT55wupTjizNOe66NJF
"""

import time
import random
import numpy as np
from math import *
import csv
import pandas as pd
import matplotlib.pyplot as plt

insert='INSERT INTO'
values='VALUES'
df=pd.read_csv("/content/entreprises-immatriculees-2017.csv",sep=';')
ListID=[]
ListIDE=[]
ListNom=[]
Listidc=[]
Listexp=[]

def Nombre2():
  nombre=100
  return nombre

def Listnom(i):
  ListNom.append(i)

def Listide(i):
  ListIDE.append(i)

def ListIDC(i):
  Listidc.append(i)

def ListEXP(i):
  Listexp.append(i)

#Pour un admin c'est 4+id, Pour un modérateur c'est 3+id, Pour un utilisateurlambaClient 1, Pour un utilisateurlambaEntreprise 2
#INSERT INTO Clients VALUES (19656, 'BOIVIN', 'Louise', null, '1 rue de toulouse Paris 75015 ile de france', 'optic2000@hotmail.com',0618795620,null, false);
#Pour type utilisateur :

print('-- peuplement de la table typedutilisateurs\n')



def Requetetypedutilisateurs():
  IDtypeutilisateur=0
  libelle=''
  for i in range(4):
    if i==0:
      IDtypeutilisateur=1
      libelle='Utilisateur Client Normal'
      print(insert,' typedutilisateurs ',values,' (',IDtypeutilisateur,',"',libelle,'");',sep="")
    if i==1:
      IDtypeutilisateur=2
      libelle='Utilisateur Entreprise Normal'
      print(insert,' typedutilisateurs ',values,' (',IDtypeutilisateur,',"',libelle,'");',sep="")
    if i==2:
      IDtypeutilisateur=3
      libelle='Utilisateur Modérateur'
      print(insert,' typedutilisateurs ',values,' (',IDtypeutilisateur,',"',libelle,'");',sep="")
    if i==3:
      IDtypeutilisateur=4
      libelle='Utilisateur Admin'
      print(insert,' typedutilisateurs ',values,' (',IDtypeutilisateur,',"',libelle,'");',sep="")
    
    
Requetetypedutilisateurs()

print('\n')
print('-- peuplement de la table utilisateurs\n')

#Pour Utilisateur :

def GenerateurIDClient():
  a=random.randint(1,21474836)
  b=1
  c=str(b)+str(a)
  return int(c)

def GenerateurIDEntreprise():
  a=random.randint(1,21474836)
  b=2
  c=str(b)+str(a)
  return int(c)

def Nom():
  df=pd.read_csv("/content/patronymes.csv",sep=',')
  i=random.randint(1,len(df["patronyme"])-1)
  Nom=df["patronyme"][i]
  return Nom

def NomEntreprise():
  df=pd.read_csv("/content/entreprises-immatriculees-2017.csv",sep=';')
  i=random.randint(1,len(df["denomination"])-1)
  Nom=df["denomination"][i]
  return Nom

def Prenom():
  df=pd.read_csv("/content/prenom.csv",sep=',')
  i=random.randint(1,len(df["prenom"])-1)
  Prenom=df["prenom"][i]
  return Prenom

def DateDeNaissance():
  a=random.randint(1922,2010)
  b=random.randint(1,12)
  c=random.randint(1,29)
  if b<10:
    b=str(0)+str(b)
  if c<10:
    c=str(0)+str(c)
  DateDeNaissance=str(a)+"-"+str(b)+"-"+str(c)
  return DateDeNaissance

def User(prenom,nom):
  user=prenom+" "+nom
  return user

def Password(prenom):
  a=random.randint(10000,156669465)
  password=prenom+str(a)
  return password

def Email(prenom,nom):
  a=random.randint(1,4)
  extension=''
  if a==1:
    extension='@gmail.com'
  if a==2:
    extension='@hotmail.com'
  if a==3:
    extension='@devinci.fr'
  if a==4:
    extension='@yahoo.fr'
  mail=prenom+'.'+nom+extension
  return mail

def FA():
  return 'Bonjour'

def Telephone():
  a=random.randint(12345678,98765432)
  b=str(0)
  c=str(6)
  telephone=b+c+str(a)
  return telephone

def IDtypeUser(a):
  if a==1:
    b=random.randint(1,20)
    if 2>=b:
      IDtypeutilisateur=4
    if 5>=b and b>=3:
      IDtypeutilisateur=3
    if 20>=b and b>=6:
      IDtypeutilisateur=1
  if a==2:
    b=random.randint(1,20)
    if 2>=b:
      IDtypeutilisateur=4
    if 5>=b and b>=3:
      IDtypeutilisateur=3
    if 20>=b and b>=6:
      IDtypeutilisateur=2
  return IDtypeutilisateur

def Photo():
  return 'chemin'

def RequeteUtilisateur():
  nombre=Nombre2()
  while nombre>=0:
    a=random.randint(1,5)
    if a>=3:
      IDutilisateur=GenerateurIDClient()
      ListID.append(IDutilisateur)
      ListIDC(IDutilisateur)
      nom=Nom()
      prenom=Prenom()
      dateDeNaissance=DateDeNaissance()
      user=User(prenom,nom)
      password=Password(prenom)
      email=Email(prenom,nom)
      FA='NULL'
      telephone=Telephone()
      IDtypeutilisateur=IDtypeUser(1)
      Photo='NULL'
      print(insert,' utilisateurs ',values,' (',IDutilisateur,',"',nom,'","',prenom,'","',dateDeNaissance,'","',user,'","',password,'","',email,'",',FA,',',telephone,',', IDtypeutilisateur,',"',Photo,'"',');',sep="")
      nombre-=1
    else:
      IDutilisateur=GenerateurIDEntreprise()
      ListID.append(IDutilisateur)
      Listide(IDutilisateur)
      nom=NomEntreprise()
      Listnom(nom)
      prenom='Null'
      dateDeNaissance=DateDeNaissance()
      user=User(prenom,nom)
      password=Password(prenom)
      email=Email(prenom,nom)
      FA='NULL'
      telephone=Telephone()
      IDtypeutilisateur=IDtypeUser(2)
      Photo='NULL'
      print(insert,' utilisateurs ',values,' (',IDutilisateur,',"',nom,'","',prenom,'","',dateDeNaissance,'","',user,'","',password,'","',email,'",',FA,',',telephone,',', IDtypeutilisateur,',"',Photo,'"',');',sep="")
      nombre-=1

RequeteUtilisateur()

print('\n')
print('-- peuplement de la table actualites\n')

#Pour actualites :

def GenerateurIDActu():
  a=random.randint(1,21474)
  b=1111
  c=str(b)+str(a)
  return int(c)




def Requeteactualites():
  nombre=Nombre2()
  while nombre>=0:
    IDActu=GenerateurIDActu()
    Titre=''
    Commentaire=''
    DatePublication=DateDeNaissance()
    Publique=True
    DatedeSaisie=''
    IP=''
    ValideeParModerateur=True
    a=random.randint(1,len(ListID)-1)
    IDutilisateur=ListID[a]
    print(insert,' actualites ',values,' (',IDActu,',"',Titre,'","',Commentaire,'","',DatePublication,'",',Publique,',',"NULL",',"',IP,'",',ValideeParModerateur,',',IDutilisateur,');',sep="")
    nombre-=1
   

Requeteactualites()


print('\n')
print('-- peuplement de la table contact\n')

#Pour contact :

def Requetecontact():
  nombre=Nombre2()
  while nombre>=0:
    a=random.randint(1,len(ListID)-1)
    b=random.randint(1,len(ListID)-1)
    IDutilisateur0=ListID[a]
    while b==a:
      b=random.randint(1,len(ListID)-1)
    IDutilisateur1=ListID[b]
    print(insert,' contacts ',values,' (', IDutilisateur0,',',IDutilisateur1,');',sep="")
    nombre-=1
   

Requetecontact()

print('\n')
print('-- peuplement de la table entreprise\n')

#Pour Entreprise :

def GenerateurIDEntreprise2():
  a=random.randint(1,2147483647)
  return a

def RaisonSocial(i):
  raisonsocial=df["forme_juridique"][i]
  return raisonsocial

def Siren(i):
  siren=df["siren"][i]
  return siren

#les 9 chiffres du numéro SIREN + les 5 chiffres du NIC
def Siret(siren):
  a=str(random.randint(10000,99999))
  b=str(siren)
  c=a+b
  return int(c)

def Adresse(i):
  adresse=df["adresse"][i]
  return adresse

def Commentaire():
  a=random.randint(1,4)
  commentaire=''
  if a==1:
    commentaire='Fast-Food'
  if a==2:
    commentaire='Entreprise Technologique'
  if a==3:
    commentaire='Fintech'
  if a==4:
    commentaire='Auto-Entrepreneur'
  return commentaire

def SiteWeb(i):
  nom=df["denomination"][i]
  a=random.randint(1,4)
  extension=''
  if a==1:
    extension='.com'
  if a==2:
    extension='.fr'
  if a==3:
    extension='.net'
  if a==4:
    extension='.en'
  siteweb=nom+extension
  return siteweb

def Email(i):
  a=random.randint(1,4)
  nom=df["denomination"][i]
  extension=''
  if a==1:
    extension='@gmail.com'
  if a==2:
    extension='@hotmail.com'
  if a==3:
    extension='@devinci.fr'
  if a==4:
    extension='@yahoo.fr'
  mail=nom+extension
  return mail

def Logo():
  return 'Bonjour'

#Pourquoi prendre i ? on veut l'index de la position sur le fichier csv  reqd_Index = df[df['Sales']>=300].index.tolist() print(reqd_Index)


def BoucleEntreprise():
  for i in range(len(ListNom)):
     reqd_Index = df[df["denomination"]==ListNom[i]].index.tolist()
     for j in range(len(reqd_Index)):
        RequeteEntreprise(reqd_Index[j],ListIDE[i])
     #df=pd.read_csv("/content/entreprises-immatriculees-2017.csv",sep=';')

def RequeteEntreprise(i,j):
  IDEntreprise=GenerateurIDEntreprise2()
  raisonsocial=RaisonSocial(i)
  siren=Siren(i)
  siret=Siret(siren)
  IDutilisateur=j
  adresse=Adresse(i)
  commentaire=Commentaire()
  siteweb=SiteWeb(i)
  email=Email(i)
  logo=Logo()
  print(insert,' entreprise ',values,' (',IDEntreprise,',"',raisonsocial,'","',siren,'","',siret,'",',IDutilisateur,',"',adresse,'","',commentaire,'","',siteweb,'","', email,'","',logo,'"',');',sep="")


BoucleEntreprise()

print('\n')
print('-- peuplement de la table typesdexperiences\n')

#Pour typesdexperiences :

def GenerateurIDExperience():
  a=random.randint(1,2147483647)
  return a

def Type(a):
  types=[]
  while a>0:
    if a==1:
      types.append('Stage')
    if a==2:
      types.append('CDI')
    if a==3:
      types.append('CDD')
    if a==4:
      types.append('Alternance')
    a-=1
  return types



def RequeteTypeExperience():
  IDExperience=GenerateurIDExperience()
  ListEXP(IDExperience)
  typedelexp=Type(4)
  for i in range(len(typedelexp)):
    print(insert,' typesdexperiences ',values,' (',IDExperience,',"',typedelexp[i],'"',');',sep="")
    IDExperience=GenerateurIDExperience()

RequeteTypeExperience()


print('\n')
print('-- peuplement de la table experience\n')

#Pour Experience :

def RaisonSocialEntreprise():
  raisonsocial="Entreprise"
  return raisonsocial

def DateDeDebut():
  a=random.randint(2004,2009)
  b=random.randint(1,12)
  c=random.randint(1,29)
  if b<10:
    b=str(0)+str(b)
  if c<10:
    c=str(0)+str(c)
  DateDebut=str(a)+"-"+str(b)+"-"+str(c)
  return DateDebut


def DateDeFin():
  compteur=random.randint(1,5)
  Datefin=""
  a=random.randint(2010,2030)
  b=random.randint(1,12)
  c=random.randint(1,29)
  if b<10:
    b=str(0)+str(b)
  if c<10:
    c=str(0)+str(c)
  Datefin=str(a)+"-"+str(b)+"-"+str(c)
  return Datefin


def CommentairePublic():
  a=random.randint(1,4)
  commentaire=''
  if a==1:
    commentaire='CDI'
  if a==2:
    commentaire='Entreprise Techno'
  if a==3:
    commentaire='Cryptomonnaie'
  if a==4:
    commentaire='Entrepreneur'
  return commentaire

def Boucleexperiences():
  for i in range(len(Listidc)):
     RequeteExperience(Listidc[i])

def RequeteExperience(i):
  a=random.randint(0,len(Listexp)-1)
  b=Listexp[a]
  IDUtilisateur=i
  raisonsocial=RaisonSocialEntreprise()
  datededebut=DateDeDebut()
  datedefin=DateDeFin()
  commentaire=CommentairePublic()
  types=Type(4)
  typesdexp=types[random.randint(0,3)]
  datesaisie=""
  IPsaisie=""
  print(insert,' experiences ',values,' (',IDUtilisateur,',"',raisonsocial,'","',datededebut,'","',datedefin,'","',commentaire,'",',b,',',"null",',"',IPsaisie,'");',sep="")



Boucleexperiences()





print('\n')
print('-- peuplement de la table logconnexions\n')

#Pour logconnexions :

print(insert,' logconnexions ',values,' (',"null",',',"null",',',"null",',',"null",');',sep="")

print('\n')
print('-- peuplement de la table message\n')

#Pour message :

print(insert,' message ',values,' (',"null",',',"null",',',"null",',',"null",',',"null",',',"null",',',"null",',',"null",',',"null",');',sep="")



print('\n')
print('-- peuplement de la table typedecontrat\n')

#Pour typedecontrat :
b=0

def GenerateurIDtypedecontrat():
  a=random.randint(1,2147483647)
  b=a
  return a

print(insert,' typedecontrat ',values,' (',GenerateurIDtypedecontrat(),',',"null",');',sep="")



print('\n')
print('-- peuplement de la table offresdemploie\n')

#Pour offresdemploie :


print(insert,' offresdemploie ',values,' (',random.randint(0,2147483647),',',ListIDE[0],',"',"alpha",'","',"commentaire",'",',"null",',',b,',"',"150000 euros",'",',"null",',', "null",',',"null",',',"true",');',sep="")







print('\n')
print('-- peuplement de la table publicites\n')

#Pour publicites :

print(insert,' publicites ',values,' (',ListIDE[random.randint(0,len(ListIDE)-1)],',',"null",',',"null",',',"null",',',"null",',',"null",',',"true",',"',"lydia",'");',sep="")

nom="FONCIER CONSULTING"
reqd_Index = df[df["denomination"]==nom].index.tolist() 
print(reqd_Index)
print(df.head())
print(df["denomination"][reqd_Index[0]])

df.head()
df["denomination"][5]

a=random.randint(1922,2010)
b=random.randint(1,12)
c=random.randint(1,31)
if b<10:
  b=str(0)+str(b)
if c<10:
  c=str(0)+str(c)
DateDeNaissance=str(a)+"-"+str(b)+"-"+str(c)
print(DateDeNaissance)

def Telephone():
  a=random.randint(12345678,98765432)
  b=str(0)
  c=str(6)
  d=b+c+str(a)
  telephone=str(d)
  return telephone
Telephone()