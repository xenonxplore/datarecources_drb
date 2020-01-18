<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
    <div class="card-body">
        <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
            <tr>
                <th>Company</th>
                <th>Ticker</th>
                <th>Year</th>
                @if ($frequency == 'quarterly' and $q1 == null and $q2 == null and $q3 == null and $q4 == null)
                    <th>Q1 PDF</th>
                    <th>Q1 Excel</th>
                    <th>Q2 PDF</th>
                    <th>Q2 Excel</th>
                    <th>Q3 PDF</th>
                    <th>Q3 Excel</th>
                    <th>Q4 PDF</th>
                    <th>Q4 Excel</th>
                @else    
                    @isset($q1)
                        <th>Q1 PDF</th>
                        <th>Q1 Excel</th>
                    @endisset
                    @isset($q2)
                        <th>Q2 PDF</th>
                        <th>Q2 Excel</th>
                    @endisset
                    @isset($q3)
                        <th>Q3 PDF</th>
                        <th>Q3 Excel</th>
                    @endisset
                    @isset($q4)
                        <th>Q4 PDF</th>
                        <th>Q4 Excel</th>
                    @endisset
                @endif    

            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Company</th>
                <th>Ticker</th>
                <th>Year</th>
                @if ($frequency == 'quarterly' and $q1 == null and $q2 == null and $q3 == null and $q4 == null)
                    <th>Q1 PDF</th>
                    <th>Q1 Excel</th>
                    <th>Q2 PDF</th>
                    <th>Q2 Excel</th>
                    <th>Q3 PDF</th>
                    <th>Q3 Excel</th>
                    <th>Q4 PDF</th>
                    <th>Q4 Excel</th>
                @else    
                    @isset($q1)
                        <th>Q1 PDF</th>
                        <th>Q1 Excel</th>
                    @endisset
                    @isset($q2)
                        <th>Q2 PDF</th>
                        <th>Q2 Excel</th>
                    @endisset
                    @isset($q3)
                        <th>Q3 PDF</th>
                        <th>Q3 Excel</th>
                    @endisset
                    @isset($q4)
                        <th>Q4 PDF</th>
                        <th>Q4 Excel</th>
                    @endisset
                @endif
            </tr>
            </tfoot>
            <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($finance_infos as $item)
                <tr>
                    <td>{{$item->company->name}}</td>
                    <td>{{$item->company->ticker}}</td>
                    <td>{{$item->year}}</td>
                    @if ($frequency == 'quarterly' and $q1 == null and $q2 == null and $q3 == null and $q4 == null)
                        @if(auth()->user())
                            @if($item->q1__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q1__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q1__pdf_url_file_name != null ? $item->q1__pdf_url_file_name : 'PDF' }}</a></td>
                            @else
                                <td>No PDF</td>
                            @endif
                        @else
                            <td><a href="/login" class="btn btn-warning">Login</a></td>   
                        @endif    

                        @if(auth()->user())    
                            @if($item->q1_excel_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q1_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q1_excel_url_file_name != null ? $item->q1_excel_url_file_name : 'Excel' }}</a></td>
                            @else
                                <td>No Excel</td>
                            @endif
                        @else
                            <td><a href="/login" class="btn btn-warning">Login</a></td>   
                        @endif

                        @if(auth()->user())
                            @if($item->q2__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q2__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q2__pdf_url_file_name != null ? $item->q2__pdf_url_file_name : 'PDF' }}</a></td>
                            @else
                                <td>No PDF</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                        @if(auth()->user())    
                            @if($item->q2_excel_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q2_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q2_excel_url_file_name != null ? $item->q2_excel_url_file_name : 'Excel' }}</a></td>
                            @else
                                <td>No Excel</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                        @if(auth()->user())
                            @if($item->q3__pdf_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q3__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q3__pdf_url_file_name != null ? $item->q3__pdf_url_file_name : 'PDF' }}</a></td>
                            @else
                                <td>No PDF</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                        @if(auth()->user())    
                            @if($item->q3_excel_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q3_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q3_excel_url_file_name != null ? $item->q3_excel_url_file_name : 'Excel' }}</a></td>
                            @else
                                <td>No Excel</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif
                        
                        @if(auth()->user())
                            @if($item->q4__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q4__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q4__pdf_url_file_name != null ? $item->q4__pdf_url_file_name : 'PDF' }}</a></td>
                            @else
                                <td>No PDF</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif
                            
                        @if(auth()->user())    
                            @if($item->q4_excel_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q4_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q4_excel_url_file_name != null ? $item->q4_excel_url_file_name : 'Excel' }}</a></td>
                            @else
                                <td>No Excel</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                    @else  
                        @isset($q1)
                            @if(auth()->user())
                                @if($item->q1__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q1__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q1__pdf_url_file_name != null ? $item->q1__pdf_url_file_name : 'PDF' }}</a></td>
                                @else
                                    <td>No PDF</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                            @if(auth()->user())
                            @if($item->q1_excel_url != '#')
                                <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q1_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q1_excel_url_file_name != null ? $item->q1_excel_url_file_name : 'Excel' }}</a></td>
                            @else
                                <td>No Excel</td>
                            @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif
                        @endisset

                        @isset($q2)
                            @if(auth()->user())
                                @if($item->q2__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q2__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q2__pdf_url_file_name != null ? $item->q2__pdf_url_file_name : 'PDF' }}</a></td>
                                @else
                                    <td>No PDF</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                            @if(auth()->user())
                                @if($item->q2_excel_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q2_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q2_excel_url_file_name != null ? $item->q2_excel_url_file_name : 'Excel' }}</a></td>
                                @else
                                    <td>No Excel</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif
                        @endisset

                        
                        @isset($q3)
                            @if(auth()->user())
                                @if($item->q3__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q3__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q3__pdf_url_file_name != null ? $item->q3__pdf_url_file_name : 'PDF' }}</a></td>
                                @else
                                    <td>No PDF</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif

                            @if(auth()->user())
                                @if($item->q3_excel_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q3_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q3_excel_url_file_name != null ? $item->q3_excel_url_file_name : 'Excel' }}</a></td>
                                @else
                                    <td>No Excel</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif    
                        @endisset


                        @isset($q4)
                            @if(auth()->user())
                                @if($item->q4__pdf_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q4__pdf_url }}" type="button" class="btn btn-outline-primary">{{ $item->q4__pdf_url_file_name != null ? $item->q4__pdf_url_file_name : 'PDF' }}</a></td>
                                @else
                                    <td>No PDF</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif 

                            @if(auth()->user())
                                @if($item->q4_excel_url != '#')
                                    <td><a target="_blank" href="{{ env('S3_URL') }}{{ $item->q4_excel_url }}" type="button" class="btn btn-outline-primary">{{ $item->q4_excel_url_file_name != null ? $item->q4_excel_url_file_name : 'Excel' }}</a></td>
                                @else
                                    <td>No Excel</td>
                                @endif
                            @else
                                <td><a href="/login" class="btn btn-warning">Login</a></td>   
                            @endif 
                        @endisset
                    @endif        
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>