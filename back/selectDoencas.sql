SELECT * 
FROM doenca AS d
INNER JOIN doenca_x_sintoms AS dxs ON dxs.fk_doenca = d.Id
INNER JOIN sintoma AS s ON s.Id = '1' AND s.Id = '2' AND s.Id = '3'