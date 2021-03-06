<style>
	th {
		font-family: 'Helvetica';
		font-weight: normal;
		font-style: normal;
		font-variant: normal;
		font-size: 10;
	}
	td {
		font-family: 'Helvetica';
		font-weight: normal;
		font-style: normal;
		font-variant: normal;
		font-size: 8;
	
	}
</style>
<table width="100%" style="border: 1px solid #000;" cellspacing="4">
    <thead>
    	<tr>
	        <th colspan="8" style="text-align:center;"><b>INVOICE</b></th>
	    </tr>
    	<tr>
	        <th width="5%">
	        	<br/>
	        </th>
	        <th width="35%"></th>
	        <th width="12%"></th>
	        <th width="12%"></th>
	        <th width="12%"></th>
	        <th width="12%"></th>
	        <th width="12%"></th>
	        <th width="12%"></th>
	    </tr>
	</thead>
	<tbody>
    	<tr style="height:14px;">
	    	<td></td>
	        <td>NAME:</td>
	        <td colspan="6">{{ $employeeSalary->employee->name }}</td>
	    </tr>
	   	<tr>
	   		<td></td>
	        <td>LOCATION:</td>
	        <td colspan="6">{{ $employeeSalary->job_location }}</td>
	    </tr>
	   	<tr>
	   		<td></td>
	        <td>PERIOD:</td>
	        <td colspan="6">{{ date('d F Y', strtotime($employeeSalary->start_date)) }} - {{ date('d F Y', strtotime($employeeSalary->end_date)) }}</td>
	    </tr>
    	<tr>
	        <td colspan="2"></td>
	        <td style="text-align:center;">W1</td>
	        <td style="text-align:center;">W2</td>
	        <td style="text-align:center;">W3</td>
	        <td style="text-align:center;">W4</td>
	        <td style="text-align:center;">W5</td>
	        <td style="text-align:center;">Weight</td>
	    </tr>
	    <tr>
	        <td colspan="2" style="text-align:center;"><b>MINIMUM COMPONENT</b></td>
	        <td colspan="6"></td>
	    </tr>
	    @foreach($employeeSalary->assessments as $key => $indicator)
	        <tr>
	            <td>{{ ($key + 1) }}</td>
	            <td>{{ $indicator->name }}</td>
	            <td style="text-align:center;">{{ number_format($additionalSalaryData['score_percentages_assessments'][$key]['week1'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($additionalSalaryData['score_percentages_assessments'][$key]['week2'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($additionalSalaryData['score_percentages_assessments'][$key]['week3'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($additionalSalaryData['score_percentages_assessments'][$key]['week4'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($additionalSalaryData['score_percentages_assessments'][$key]['week5'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($indicator->weight, 0) }}%</td>
	        </tr>
	    @endforeach
	    <tr>
	        <td colspan="2" style="text-align:center;"><b>MINIMUM COMPONENT SCORE</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_assessments']['week1'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_assessments']['week2'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_assessments']['week3'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_assessments']['week4'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_assessments']['week5'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['average_minimum_component_score'], 2) }}%</b></td>
	    </tr>
	    <tr>
	    	<th colspan="8">
	        	<br/>
	        </td>
	    </tr>
	    <tr>
	        <td colspan="2" style="text-align:center;"><b>ADDITIONAL COMPONENT</b></td>
	        <td colspan="6"></td>
	    </tr>
	    @foreach($employeeSalary->achievements as $key => $achievement)
	        <tr>
	            <td>{{ ++$key }}</td>
	            <td>{{ $achievement->name }}</td>
	            <td style="text-align:center;">{{ number_format($achievement['week1'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($achievement['week2'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($achievement['week3'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($achievement['week4'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($achievement['week5'], 0) }}%</td>
	            <td style="text-align:center;">{{ number_format($achievement['weight'], 0) }}%</td>
	        </tr>
	    @endforeach
	    <tr>
	        <td colspan="2" style="text-align:center;"><b>ADDITIONAL COMPONENT SCORE</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_achievements']['week1'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_achievements']['week2'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_achievements']['week3'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_achievements']['week4'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($additionalSalaryData['total_achievements']['week5'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['average_additional_component_score'], 2) }}%</b></td>
	    </tr>
	    <tr>
	        <td colspan="2" style="text-align:center;"><b>FINAL SCORE</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['salary_final_score_week_1'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['salary_final_score_week_2'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['salary_final_score_week_3'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['salary_final_score_week_4'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['salary_final_score_week_5'], 2) }}%</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['average_final_score'], 2) }}%</b></td>
	    </tr>
	    <tr>
	    	<th colspan="8">
	        	<br/>
	        </td>
	    </tr>
	    <tr>
	        <td colspan="2">Area Value</td>
	        <td style="text-align:center;">Rp {{ number_format($employeeSalary->base_salary, 2) }}</td>
	        <td style="text-align:center;">Rp {{ number_format($employeeSalary->base_salary, 2) }}</td>
	        <td style="text-align:center;">Rp {{ number_format($employeeSalary->base_salary, 2) }}</td>
	        <td style="text-align:center;">Rp {{ number_format($employeeSalary->base_salary, 2) }}</td>
	        <td style="text-align:center;">Rp {{ number_format($employeeSalary->base_salary, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Area Value Per Week</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['base_salary_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['base_salary_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['base_salary_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['base_salary_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['base_salary_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Daily Transport</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->daily_transport_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->daily_transport_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->daily_transport_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->daily_transport_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->daily_transport_allowance, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Real Transport Received</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['real_transport_allowance_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['real_transport_allowance_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['real_transport_allowance_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['real_transport_allowance_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['real_transport_allowance_week_5'], 2) }}</td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['real_transport_allowance_total'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">Minimum Component</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['minimum_component_amount_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['minimum_component_amount_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['minimum_component_amount_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['minimum_component_amount_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['minimum_component_amount_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Multiplier KPI</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->multiplier_kpi, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->multiplier_kpi, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->multiplier_kpi, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->multiplier_kpi, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->multiplier_kpi, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Multiplier KPI (Weekly Result)</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['multiplier_kpi_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['multiplier_kpi_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['multiplier_kpi_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['multiplier_kpi_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['multiplier_kpi_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Additional Point</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_point_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_point_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_point_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_point_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_point_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Additional Component</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_amount_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_amount_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_amount_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_amount_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['additional_component_amount_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Total Amount</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['total_component_amount_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['total_component_amount_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['total_component_amount_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['total_component_amount_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['total_component_amount_week_5'], 2) }}</td>
	        <td style="text-align:center;"><b>Rp {{ number_format($calculatedSalaryData['total_component_amount'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2"><b>Total Amount With Allowance</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_amount_received_week_1'], 2) }}</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_amount_received_week_2'], 2) }}</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_amount_received_week_3'], 2) }}</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_amount_received_week_4'], 2) }}</b></td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_amount_received_week_5'], 2) }}</b></td>
	        <td style="text-align:center;"><b>Rp {{ number_format($calculatedSalaryData['total_amount_received'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">Receivable Cut &gt; 60 Days</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->receivable_cut_60_days_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->receivable_cut_60_days_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->receivable_cut_60_days_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->receivable_cut_60_days_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->receivable_cut_60_days_week5, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	    	<td colspan="2"><b>Total Amount Received</b></td>
	        <td colspan="5"></td>>
	        <td style="text-align:center;"><b>Rp {{ number_format($calculatedSalaryData['total_amount_received'], 2) }}</b></td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Company Profit</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_week_5'], 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Overdue Receivable</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->overdue_receivable_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->overdue_receivable_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->overdue_receivable_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->overdue_receivable_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->overdue_receivable_week5, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Payment From Marketing</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_marketing_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_marketing_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_marketing_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_marketing_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_marketing_week5, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Payment From Sales</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_sales_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_sales_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_sales_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_sales_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_sales_week5, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Payment From SPG</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_spg_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_spg_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_spg_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_spg_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->payment_from_spg_week5, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Received Cash Payment</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->cash_payment_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->cash_payment_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->cash_payment_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->cash_payment_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->cash_payment_week5, 2) }}</td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_payment'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">Settlement Difference Minus Amount</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['settlement_difference_minus_amount_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['settlement_difference_minus_amount_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['settlement_difference_minus_amount_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['settlement_difference_minus_amount_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['settlement_difference_minus_amount_week_5'], 2) }}</td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_settlement_difference_minus_amount'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">Company Profit Difference Minus Amount</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_difference_minus_amount_week_1'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_difference_minus_amount_week_2'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_difference_minus_amount_week_3'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_difference_minus_amount_week_4'], 2) }}</td>
	        <td style="text-align:center;">{{ number_format($calculatedSalaryData['company_profit_difference_minus_amount_week_5'], 2) }}</td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_company_profit_difference_minus_amount'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">Communication Allowance</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->communication_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->communication_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->communication_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->communication_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->communication_allowance, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Functional Allowance</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->functional_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->functional_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->functional_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->functional_allowance, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->functional_allowance, 2) }}</td>
	        <td>&nbsp;</td>
	    </tr>
	    <tr>
	        <td colspan="2">Weekly Sales</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->weekly_sales_week1, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->weekly_sales_week2, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->weekly_sales_week3, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->weekly_sales_week4, 2) }}</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->weekly_sales_week5, 2) }}</td>
	        <td style="text-align:center;"><b>{{ number_format($calculatedSalaryData['total_weekly_sales'], 2) }}</b></td>
	    </tr>
	    <tr>
	        <td colspan="2">WA Daily Report</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->wa_daily_report_week1, 2) }}%</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->wa_daily_report_week2, 2) }}%</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->wa_daily_report_week3, 2) }}%</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->wa_daily_report_week4, 2) }}%</td>
	        <td style="text-align:center;">{{ number_format($employeeSalary->wa_daily_report_week5, 2) }}%</td>
	        <td>&nbsp;</td>
	    </tr>
    </tbody>
</table>
