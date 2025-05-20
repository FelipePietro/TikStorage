import { Entity, Column, PrimaryGeneratedColumn } from 'typeorm';
@Entity('produto')// nome da tabela no banco de dados

export class Produto {
@PrimaryGeneratedColumn()
id: number;

@Column()
nm_prod: string;

@Column()
cat_prod: string;

@Column()
qntd_prod: number;

@Column()
loc_prod: string;

@Column()
dat_prod: string;

@Column()
desc_prod: string;
}
