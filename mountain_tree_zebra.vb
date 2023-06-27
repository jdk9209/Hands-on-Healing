Public Class Form1

Dim healRate As Integer

Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

healRate = 0

End Sub

Private Sub btn_Click(sender As Object, e As EventArgs) Handles btn.Click

If healRate > 0 

healRate = healRate + 10

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub chk_CheckedChanged(sender As Object, e As EventArgs) Handles chk.CheckedChanged

If chk.Checked = True Then

healRate = healRate + 5

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub pb_DoubleClick(sender As Object, e As EventArgs) Handles pb.DoubleClick

If healRate > 0 

healRate = healRate + 20

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub Timer1_Tick(sender As Object, e As EventArgs) Handles Timer1.Tick

If healRate > 0 

healRate = healRate - 1

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn2_Click(sender As Object, e As EventArgs) Handles btn2.Click

If healRate > 0 

healRate = healRate + 15

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub lbl_Click(sender As Object, e As EventArgs) Handles lbl.Click

If healRate > 0 

healRate = healRate + 25

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub pb2_Click(sender As Object, e As EventArgs) Handles pb2.Click

If healRate > 0 

healRate = healRate + 30

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub tb_TextChanged(sender As Object, e As EventArgs) Handles tb.TextChanged

If healRate > 0 

healRate = healRate + 35

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn3_Click(sender As Object, e As EventArgs) Handles btn3.Click

If healRate > 0 

healRate = healRate + 40

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn4_Click(sender As Object, e As EventArgs) Handles btn4.Click

If healRate > 0 

healRate = healRate + 45

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub pb3_Click(sender As Object, e As EventArgs) Handles pb3.Click

If healRate > 0 

healRate = healRate + 50

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub chk2_CheckedChanged(sender As Object, e As EventArgs) Handles chk2.CheckedChanged

If chk2.Checked = True Then

healRate = healRate + 55

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn5_Click(sender As Object, e As EventArgs) Handles btn5.Click

If healRate > 0 

healRate = healRate + 60

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub lbl2_Click(sender As Object, e As EventArgs) Handles lbl2.Click

If healRate > 0 

healRate = healRate + 65

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn6_Click(sender As Object, e As EventArgs) Handles btn6.Click

If healRate > 0 

healRate = healRate + 70

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub pb4_Click(sender As Object, e As EventArgs) Handles pb4.Click

If healRate > 0 

healRate = healRate + 75

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub chk3_CheckedChanged(sender As Object, e As EventArgs) Handles chk3.CheckedChanged

If chk3.Checked = True Then

healRate = healRate + 80

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub pb5_Click(sender As Object, e As EventArgs) Handles pb5.Click

If healRate > 0 

healRate = healRate + 85

Else 

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn7_Click(sender As Object, e As EventArgs) Handles btn7.Click

If healRate > 0 Then

healRate = healRate + 90

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub lbl3_Click(sender As Object, e As EventArgs) Handles lbl3.Click

If healRate > 0 Then

healRate = healRate + 95

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

Private Sub btn8_Click(sender As Object, e As EventArgs) Handles btn8.Click

If healRate > 0 Then

healRate = healRate + 100

Else

MsgBox(“No More Healing Available!”)

End If

End Sub

End Class