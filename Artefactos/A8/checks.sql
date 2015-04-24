CHECK (VALUE::text = ANY (ARRAY['Concluida'::CHARACTER VARYING, 'Execucao'::CHARACTER VARYING]::text[]))

CHECK (VALUE::text = ANY (ARRAY['Master'::CHARACTER VARYING, 'Coordenador'::CHARACTER VARYING, 'Colaborador'::CHARACTER VARYING]::text[]))

CHECK (VALUE = ANY (ARRAY['F'::"char", 'M'::"char"]))

CHECK (VALUE::text = ANY (ARRAY['Criada'::CHARACTER VARYING, 'Sugerida'::CHARACTER VARYING, 'Aceite'::CHARACTER VARYING, 'Rejeitada'::CHARACTER VARYING]::text[]))