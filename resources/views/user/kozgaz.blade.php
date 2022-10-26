@extends('layouts.app')

@section('content')
    <br>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">2022 | <strong>Közgazdasági alapismeretek I. (mikroökonómia)</strong></h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Óra
                        </th>
                        <th style="width: 30%">
                            Előadaás cím
                        </th>
                        <th>
                            Project Progress
                        </th>
                        <th style="width: 8%" class="text-center">
                            Státusz
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>1.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Intro & A közgazdaságtan tíz alapelve
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/1_eloadas.pdf") }}" download="1_eloadas">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>2.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                               Modellek
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/2_eloadas.pdf") }}" download="2_eloadas">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>3.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                A kereskedelem haszna, komparatív előnyök
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/3_eloadas.pdf") }}" download="3_eloadas">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>4.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kereslet és kínálat
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/4_eloadas.pdf") }}" download="4_eloadas">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>5.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Rugalmasság és alkalmazásai
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/5_eloadas.pdf") }}" download="5_eloadas">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>6.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 1-5 minden
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz_1_5_minden.pdf") }}" download="kviz-1-5.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>7.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 1-külön
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz1_minden.pdf") }}" download="Kviz1_minden.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>8.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 2-külön
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz2_minden.pdf") }}" download="Kviz2_minden.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>9.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 3-külön
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz3_minden.pdf") }}" download="Kviz3_minden.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>10.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 4-külön
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz4_minden.pdf") }}" download="Kviz4_minden.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>11.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                                Kvíz 5-külön
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/Kviz5_minden.pdf") }}" download="Kviz5_minden.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>12.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                               Közgazdaság alapjai 1.rész
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/mankiw_a_közgazdaságtan_alapjai_1.pdf") }}" download="mankiw_a_közgazdaságtan_alapjai_1.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                    <tr>
                        <td>
                            #
                        </td>
                        <td>
                            <a>
                             <strong>12.</strong>
                            </a>
                            <br>
                            <small>
                              2022.00.00
                            </small>
                        </td>
                        <td>
                            <a>
                               Közgazdaság alapjai 2.rész
                            </a>
                        </td>
                        <td class="project_progress">
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-green" role="progressbar" aria-valuenow="2"
                                    aria-valuemin="1" aria-valuemax="100" style="width: {{ ((date("z") + 1)/360)*100 }}%">
                                </div>
                            </div>
                            <small>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">Success</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="{{ asset("files/kozgaz/mankiw_a_közgazdaságtan_alapjai_2.pdf") }}" download="mankiw_a_közgazdaságtan_alapjai_2.pdf">
                                <i class="fas fa-download">
                                </i>
                                Letöltés
                            </a>
                         

                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
    
@endsection
