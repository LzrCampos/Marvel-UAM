SELECT 
    *
FROM doenca
WHERE id IN (
    SELECT 
        d.id
    FROM doenca AS d
    INNER JOIN doeenca_x_sintoma AS dxs ON dxs.fk_doenca = d.id
    INNER JOIN sintomas AS s ON s.id = dxs.fk_sintoma
    WHERE s.name IN ('','','')
) 
