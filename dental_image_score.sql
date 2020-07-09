/*
Navicat SQL Server Data Transfer

Source Server         : sql server f38158
Source Server Version : 105000
Source Host           : f38158:1433
Source Database       : scans
Source Schema         : dbo

Target Server Type    : SQL Server
Target Server Version : 105000
File Encoding         : 65001

Date: 2020-07-09 11:31:41
*/


-- ----------------------------
-- Table structure for [dbo].[dental_image_score]
-- ----------------------------
DROP TABLE [dbo].[dental_image_score]
GO
CREATE TABLE [dbo].[dental_image_score] (
[ud] varchar(255) NULL ,
[um] varchar(255) NULL ,
[uf] varchar(255) NULL ,
[ut] varchar(255) NULL ,
[ld] varchar(255) NULL ,
[lm] varchar(255) NULL ,
[lf] varchar(255) NULL ,
[lt] varchar(255) NULL ,
[other_observation] varchar(MAX) NULL ,
[l55] varchar(255) NULL ,
[l54] varchar(255) NULL ,
[l53] varchar(255) NULL ,
[l52] varchar(255) NULL ,
[l51] varchar(255) NULL ,
[u17] varchar(255) NULL ,
[u16] varchar(255) NULL ,
[u15] varchar(255) NULL ,
[u14] varchar(255) NULL ,
[u13] varchar(255) NULL ,
[u12] varchar(255) NULL ,
[u11] varchar(255) NULL ,
[l61] varchar(255) NULL ,
[l62] varchar(255) NULL ,
[l63] varchar(255) NULL ,
[l64] varchar(255) NULL ,
[l65] varchar(255) NULL ,
[u21] varchar(255) NULL ,
[u22] varchar(255) NULL ,
[u23] varchar(255) NULL ,
[u24] varchar(255) NULL ,
[u25] varchar(255) NULL ,
[u26] varchar(255) NULL ,
[u27] varchar(255) NULL ,
[l85] varchar(255) NULL ,
[l84] varchar(255) NULL ,
[l83] varchar(255) NULL ,
[l82] varchar(255) NULL ,
[l81] varchar(255) NULL ,
[u47] varchar(255) NULL ,
[u46] varchar(255) NULL ,
[u45] varchar(255) NULL ,
[u44] varchar(255) NULL ,
[u43] varchar(255) NULL ,
[u42] varchar(255) NULL ,
[u41] varchar(255) NULL ,
[l71] varchar(255) NULL ,
[l72] varchar(255) NULL ,
[l73] varchar(255) NULL ,
[l74] varchar(255) NULL ,
[l75] varchar(255) NULL ,
[u31] varchar(255) NULL ,
[u32] varchar(255) NULL ,
[u33] varchar(255) NULL ,
[u34] varchar(255) NULL ,
[u35] varchar(255) NULL ,
[u36] varchar(255) NULL ,
[u37] varchar(255) NULL ,
[id] int NOT NULL IDENTITY(1,1) ,
[createdBy] varchar(255) NULL ,
[createdDateTime] datetime NULL ,
[cluster] varchar(255) NULL ,
[hhno] varchar(255) NULL 
)


GO
DBCC CHECKIDENT(N'[dbo].[dental_image_score]', RESEED, 5)
GO

-- ----------------------------
-- Records of dental_image_score
-- ----------------------------
SET IDENTITY_INSERT [dbo].[dental_image_score] ON
GO
INSERT INTO [dbo].[dental_image_score] ([ud], [um], [uf], [ut], [ld], [lm], [lf], [lt], [other_observation], [l55], [l54], [l53], [l52], [l51], [u17], [u16], [u15], [u14], [u13], [u12], [u11], [l61], [l62], [l63], [l64], [l65], [u21], [u22], [u23], [u24], [u25], [u26], [u27], [l85], [l84], [l83], [l82], [l81], [u47], [u46], [u45], [u44], [u43], [u42], [u41], [l71], [l72], [l73], [l74], [l75], [u31], [u32], [u33], [u34], [u35], [u36], [u37], [id], [createdBy], [createdDateTime], [cluster], [hhno]) VALUES (N'3', N'2', N'2', N'7', N'4', N'3', N'3', N'10', N'Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz ', N'2', N'1', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'2', N'1', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'2', N'0', N'0', N'1', N'0', N'1', N'0', N'0', N'2', N'0', N'0', N'3', N'0', N'3', N'0', N'0', N'1', N'0', N'0', N'2', N'3', N'0', N'0', N'1', N'1', N'shahroz.khan', N'2020-06-20 13:50:14.000', N'3321', N'0180-001');
GO
INSERT INTO [dbo].[dental_image_score] ([ud], [um], [uf], [ut], [ld], [lm], [lf], [lt], [other_observation], [l55], [l54], [l53], [l52], [l51], [u17], [u16], [u15], [u14], [u13], [u12], [u11], [l61], [l62], [l63], [l64], [l65], [u21], [u22], [u23], [u24], [u25], [u26], [u27], [l85], [l84], [l83], [l82], [l81], [u47], [u46], [u45], [u44], [u43], [u42], [u41], [l71], [l72], [l73], [l74], [l75], [u31], [u32], [u33], [u34], [u35], [u36], [u37], [id], [createdBy], [createdDateTime], [cluster], [hhno]) VALUES (N'3', N'2', N'2', N'7', N'4', N'3', N'3', N'10', N'Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz Testing abcd xyz ', N'2', N'1', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'2', N'1', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'2', N'0', N'0', N'1', N'0', N'1', N'0', N'0', N'2', N'0', N'0', N'3', N'0', N'3', N'0', N'0', N'1', N'0', N'0', N'2', N'3', N'0', N'0', N'1', N'2', N'shahroz.khan', N'2020-06-20 13:50:14.000', N'3321', N'0180-001');
GO
INSERT INTO [dbo].[dental_image_score] ([ud], [um], [uf], [ut], [ld], [lm], [lf], [lt], [other_observation], [l55], [l54], [l53], [l52], [l51], [u17], [u16], [u15], [u14], [u13], [u12], [u11], [l61], [l62], [l63], [l64], [l65], [u21], [u22], [u23], [u24], [u25], [u26], [u27], [l85], [l84], [l83], [l82], [l81], [u47], [u46], [u45], [u44], [u43], [u42], [u41], [l71], [l72], [l73], [l74], [l75], [u31], [u32], [u33], [u34], [u35], [u36], [u37], [id], [createdBy], [createdDateTime], [cluster], [hhno]) VALUES (N'1', N'1', N'1', N'3', N'2', N'1', N'1', N'4', N'observation observation observation observation observation observation observation observation observation observation observation observation observation ', N'0', N'1', N'0', N'0', N'0', N'0', N'0', N'2', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'2', N'0', N'0', N'0', N'1', N'0', N'3', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'3', N'shahroz.khan', N'2020-06-20 13:59:33.000', N'3321', N'0180-001');
GO
INSERT INTO [dbo].[dental_image_score] ([ud], [um], [uf], [ut], [ld], [lm], [lf], [lt], [other_observation], [l55], [l54], [l53], [l52], [l51], [u17], [u16], [u15], [u14], [u13], [u12], [u11], [l61], [l62], [l63], [l64], [l65], [u21], [u22], [u23], [u24], [u25], [u26], [u27], [l85], [l84], [l83], [l82], [l81], [u47], [u46], [u45], [u44], [u43], [u42], [u41], [l71], [l72], [l73], [l74], [l75], [u31], [u32], [u33], [u34], [u35], [u36], [u37], [id], [createdBy], [createdDateTime], [cluster], [hhno]) VALUES (N'2', N'0', N'0', N'2', N'0', N'1', N'0', N'1', N'', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'2', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'4', N'shahroz.khan', N'2020-06-20 14:01:55.000', N'3321', N'0180-001');
GO
INSERT INTO [dbo].[dental_image_score] ([ud], [um], [uf], [ut], [ld], [lm], [lf], [lt], [other_observation], [l55], [l54], [l53], [l52], [l51], [u17], [u16], [u15], [u14], [u13], [u12], [u11], [l61], [l62], [l63], [l64], [l65], [u21], [u22], [u23], [u24], [u25], [u26], [u27], [l85], [l84], [l83], [l82], [l81], [u47], [u46], [u45], [u44], [u43], [u42], [u41], [l71], [l72], [l73], [l74], [l75], [u31], [u32], [u33], [u34], [u35], [u36], [u37], [id], [createdBy], [createdDateTime], [cluster], [hhno]) VALUES (N'3', N'1', N'1', N'5', N'2', N'1', N'0', N'3', N'zcxscas', N'0', N'3', N'0', N'0', N'1', N'0', N'0', N'1', N'0', N'2', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'2', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'0', N'1', N'0', N'0', N'0', N'0', N'0', N'5', N'shahroz.khan', N'2020-06-20 14:05:44.000', N'3321', N'0180-001');
GO
SET IDENTITY_INSERT [dbo].[dental_image_score] OFF
GO

-- ----------------------------
-- Indexes structure for table dental_image_score
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table [dbo].[dental_image_score]
-- ----------------------------
ALTER TABLE [dbo].[dental_image_score] ADD PRIMARY KEY ([id])
GO
