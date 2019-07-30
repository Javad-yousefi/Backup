import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from './home/home.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { ProductComponent } from './product/product.component';


const routes: Routes = [
  {
    path:"",
    component:HomeComponent

  },
  {
    path:"product/:id",
    component:ProductComponent
  },
  {
    path:"**",
    // component:NotFoundComponent 
    // OR
    redirectTo:""
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
