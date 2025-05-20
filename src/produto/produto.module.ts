import { Module } from '@nestjs/common';
import { TypeOrmModule } from '@nestjs/typeorm';
import { Produto } from './produto.entity';
import { ProdutoService } from './produto.service';
import { ProdutoController } from './produto.controller';
@Module({
 imports: [TypeOrmModule.forFeature([Produto])], // <-- aqui está a mágica!
 providers: [ProdutoService],
 controllers: [ProdutoController],
})
export class ProdutoModule {}