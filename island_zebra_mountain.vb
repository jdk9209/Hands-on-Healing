Public Class HandsOnHealing
    Inherits System.Windows.Forms.Form

    'Declare class level variables
    Private patientName As String
    Private patientAge As Integer
    Private patientGender As String
    Private treatmentType As String

    'Form Constructor
    Public Sub New()
        InitializeComponent()
        Me.patientName = ""
        Me.patientAge = 0
        Me.patientGender = ""
        Me.treatmentType = ""
    End Sub

    'Form Events
    Private Sub HandsOnHealing_Load(ByVal sender As Object, ByVal e As EventArgs) Handles MyBase.Load
        patientNameTextBox.Focus()
    End Sub

    'UI Control Event Handlers
    Private Sub patientNameTextBox_TextChanged(ByVal sender As Object, ByVal e As EventArgs)
        Me.patientName = patientNameTextBox.Text.Trim
    End Sub

    Private Sub patientAgeTextBox_TextChanged(ByVal sender As Object, ByVal e As EventArgs)
        Integer.TryParse(patientAgeTextBox.Text, Me.patientAge)
    End Sub

    Private Sub maleRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If maleRadioButton.Checked Then
            Me.patientGender = "Male"
        End If
    End Sub

    Private Sub femaleRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If femaleRadioButton.Checked Then
            Me.patientGender = "Female"
        End If
    End Sub

    Private Sub massageRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If massageRadioButton.Checked Then
            Me.treatmentType = "Massage"
        End If
    End Sub

    Private Sub reflexologyRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If reflexologyRadioButton.Checked Then
            Me.treatmentType = "Reflexology"
        End If
    End Sub

    Private Sub acupunctureRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If acupunctureRadioButton.Checked Then
            Me.treatmentType = "Acupuncture"
        End If
    End Sub

    Private Sub chiropracticRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If chiropracticRadioButton.Checked Then
            Me.treatmentType = "Chiropractic"
        End If
    End Sub

    Private Sub assistedStretchesRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If assistedStretchesRadioButton.Checked Then
            Me.treatmentType = "Assisted Stretching"
        End If
    End Sub

    Private Sub creamsRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If creamsRadioButton.Checked Then
            Me.treatmentType = "Creams and Ointments"
        End If
    End Sub

    Private Sub hotColdRadioButton_CheckedChanged(ByVal sender As Object, ByVal e As EventArgs)
        If hotColdRadioButton.Checked Then
            Me.treatmentType = "Hot and Cold Therapy"
        End If
    End Sub

    Private Sub confirmButton_Click(ByVal sender As Object, ByVal e As EventArgs)
        Dim errorMessage As String = ValidateFormData()

        If errorMessage.Length = 0 Then
            Dim patientData As String = String.Format("Patient Name: {0}, Age: {1}, Gender: {2}, Treatment: {3}", & _
                                                     _patientName, patientAge.ToString(), patientGender, & _
                                                     _treatmentType)
            MessageBox.Show(patientData, "Confirm Patient Data", MessageBoxButtons.OK, MessageBoxIcon.Information)
        Else
            MessageBox.Show(errorMessage, "Missing Data", MessageBoxButtons.OK, MessageBoxIcon.Exclamation)
        End If
    End Sub

    'Private Helper Methods
    Private Function ValidateFormData() As String
        Dim errorMessage As String = ""

        If patientName.Length = 0 Then
            errorMessage += "Missing patient name." & vbCrLf
        End If

        If patientAge = 0 Then
            errorMessage += "Missing patient age." & vbCrLf
        End If

        If patientGender.Length = 0 Then
            errorMessage += "Missing patient gender." & vbCrLf
        End If

        If treatmentType.Length = 0 Then
            errorMessage += "Missing treatment type." & vbCrLf
        End If

        Return errorMessage
    End Function

End Class