import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Produto } from './produto/produto.entity';
import { ProdutoModule } from './produto/produto.module';
@Module({
imports: [
TypeOrmModule.forRoot({
type: 'mysql',
host: 'localhost',
port: 3306,
username: 'root',
password: '', // ou '123', dependendo do seu XAMPP
database: 'tikstorage',
entities: [Produto],
synchronize: true, // em produção, mude para false
}),
ProdutoModule,
],
})
export class AppModule {}