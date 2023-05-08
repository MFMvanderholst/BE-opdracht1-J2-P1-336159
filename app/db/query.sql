SELECT * 
FROM voertuiginstructeur VI INNER JOIN Voertuig V
ON voertuiginstructeur.VoertuigId = VoertuigId
WHERE instructeurId = 1;