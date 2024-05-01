import { Routes } from '@angular/router';

export const routes: Routes = [
  {
    path: '',
    loadChildren: () =>
      import('../app/pages/home/home.component').then((m) => m.HomeComponent),
  },
];
